<?php
require('../include/config.php');
$category=$_GET['category'];

$query=mysqli_query($sql,'SELECT artist.name FROM artist
                                JOIN album ON album.artist_id= artist.id
                                JOIN genre ON album.genre_id=genre.id
                                WHERE genre.name="' .$category.'"');
$row=mysqli_fetch_all($query);
$artistNames=array();
for($i=1;$i<sizeof($row);$i++){
    $artistNames[$i]=$row[$i];

}


$artist="";
$filters="";
if(isset($_POST['filters'])) {
    $filters = $_POST['filters'];
    $artist = $_POST['artist'];
}
if(!empty($artist) || !empty($filters)){
    $query=mysqli_query($sql,'SELECT * FROM album
                                    JOIN genre ON genre.id=album.genre_id
                                    JOIN artist ON artist.id=album.artist_id
                                    WHERE genre.name="' .$category .'" AND artist.name="' .$artist.'"ORDER BY release_date '.$filters.' ');
}
else{
        $query=mysqli_query($sql,'SELECT * FROM album
                                    JOIN genre ON genre.id=album.genre_id
                                    WHERE genre.name="' .$category .'"');
}

$row=mysqli_fetch_all($query);
$albumTitle=array();
$albumReleaseDate = array();
$albumImagePath= array();
for($i=0;$i<sizeof($row);$i++){
    $albumTitle[$i]=$row[$i][3];
    $albumReleaseDate[$i]=$row[$i][4];
    $albumImagePath[$i]=$row[$i][5];
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Album</title>
    <link rel="stylesheet" href="../css/album.css">
</head>
<body>

<div class="container header">
    <div class="row border border-white rounded">
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
            <select name="filters">
                <option value="" selected="selected">By Release Date</option>
                <option value="ASC">Release Date ↑</option>
                <option value="DESC">Release Date ↓</option>
            </select>
            <input name="search" type="submit" value="Search"/>
        </form>
    </div>
    </br></br>
    <?php
    for($i=0;$i<sizeof($albumTitle);$i+=2){?>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 ">
                 <a href='songs.php?album=<?=$albumTitle[$i]?>' > <img src='<?=$albumImagePath[$i]?>'></a></br>
                  <span class='albumTitle'><?=$albumTitle[$i]?></span> </br><span class='albumReleaseDate'><?=$albumReleaseDate[$i] ?></span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <a href='songs.php?album=<?=$albumTitle[$i+1]?>'> <img src='<?=$albumImagePath[$i+1]?>'/></a></br> <span class='albumTitle'><?=$albumTitle[$i+1]?></span>
                </br><span class='albumReleaseDate'><?=$albumReleaseDate[$i+1]?></span>
            </div>
        </div>
        <?php }?>
</div>

</body>
</html>
