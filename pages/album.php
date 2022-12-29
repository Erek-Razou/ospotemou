<?php
require('../include/config.php');
$category = $_GET['category'];

// Query for the artist options in the filter's select
$query = mysqli_query($sql, "SELECT DISTINCT artist.name FROM artist
                                   JOIN album ON album.artist_id= artist.id
                                   JOIN genre ON album.genre_id=genre.id
                                   WHERE genre.name='$category'");
$rows = mysqli_fetch_all($query);
$artistNames = array();
for ($i = 1; $i < sizeof($rows); $i++) {
    $artistNames[$i] = $rows[$i];
}


// Filtered query for albums to display
$filterArtistName = null;
if (isset($_POST['artist'])) {
    $filterArtistName = $_POST['artist'];
}

$dateSort = "ASC";
if (isset($_POST['dateSort'])) {
    $dateSort = $_POST['dateSort'];
}

$query = "SELECT album.name, album.release_date, album.image_path,
                 artist.name
          FROM genre
          JOIN album ON genre.id = album.genre_id
          JOIN artist ON album.artist_id = artist.id
          WHERE genre.name LIKE '$category'";
if ($filterArtistName != null) {
    $query .= " AND artist.name LIKE '$filterArtistName'";
}
$query .= " ORDER BY album.release_date $dateSort";
$results = mysqli_query($sql, $query);

$albumTitles = array();
$albumReleaseDates = array();
$albumImagePaths = array();
$albumArtists = array();

$rows = mysqli_fetch_all($results);
foreach ($rows as $row) {
    $albumTitles[] = $row[0];
    $albumReleaseDates[] = $row[1];
    $albumImagePaths[] = $row[2];
    $albumArtists[] = $row[3];
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title><?= strtoupper($category) ?> Albums</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/album.css">
</head>
<body>

<div class="container header">
    <div class="row border  border-white rounded">
        <div class="col-3">
            <img class="logo" src="../imgs/logo.png" alt="Company Logo">
        </div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2">
            <p class="items"><a href="../index.php#home">Home</a> </p>
        </div>
        <div class="col-2">
            <p class="items"><a href="../index.php#about">About</a> </p>
        </div>
    </div>
</div>



<div class="container albums">
    <h1 align="center"><?=strtoupper($category)?> Albums</h1>
    <div class="filters">
        </br></br>
        <h3 align="left">Filters</h3>
        <form action="#" method="post">
            <select name="artist">
                <option value="" selected="selected">By Artist</option>
                <?php for($i=1;$i<sizeof($artistNames);$i++){ ?>
                    <option value="<?=implode( ", ", $artistNames[$i] )?>" ><?=implode( ", ", $artistNames[$i] )?></option>
                <?php } ?>
            </select>
            <select name="dateSort">
                <option value="" selected="selected">By Release Date</option>
                <option value="ASC">Release Date ↑</option>
                <option value="DESC">Release Date ↓</option>
            </select>
            <input name="search" type="submit" value="Search"/>
        </form>
    </div>
    </br></br>
    <?php
    echo "<div class='row'>";
    for ($i = 0; $i < sizeof($albumTitles); $i++) {
        echo "<div class='col-md-6 mb-4'>
                  <a href='songs.php?album=" . $albumTitles[$i] . "'>
                      <img class='w-100' src='" . $albumImagePaths[$i] . "'/>
                      <span class='albumTitle'>" . $albumTitles[$i] . "</span> <br/>
                      <span class='albumReleaseDate'>" . $albumReleaseDates[$i] . "</span> <br/>
                      <span class='artistName'>" . $albumArtists[$i] . "</span>
                  </a>
              </div>";
    }
    echo "</div>";
    ?>
</div>

</body>
</html>
