<?php
require_once('../include/config.php');
$album=$_GET['album'];

$query=mysqli_query($sql,'SELECT * FROM album
                                JOIN artist ON artist.id=album.artist_id
                                WHERE album.name="'.$album.'"');
$row=mysqli_fetch_all($query);
$albumImage=$row[0][5];
$albumArtist=$row[0][7];


$query=mysqli_query($sql,'SELECT * FROM song
                                JOIN album ON album.id=song.album_id
                                WHERE album.name="'.$album.'"');
$row=mysqli_fetch_all($query);
$songName=array();
$songDuration=array();
$totalDuration=0;
for($i=0;$i<sizeof($row);$i++){
    $songName[$i]=$row[$i][2];
    $songDuration[$i]= $row[$i][3];
    $songYoutubeId[$i]= $row[$i][5];
    $totalDuration += $songDuration[$i];
}
$totalDurationAll=gmdate("H:i:s", $totalDuration);



?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $albumArtist." - ".$album ?></title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/song.css">

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

<div class="container containerSongs">
    <h1 align="center"><?= $album ?></h1>
    </br>  </br>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 ">
            <img class="albumImage w-100" src="<?= $albumImage ?>"/>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 ">
            </br>  </br>
            <h3> <?= $albumArtist ?></h3>
            <h6>Total Duration: <?= $totalDurationAll ?></h6>
        </div>
    </div>
    </br>  </br>  </br>
    <div class="row text-center">
        <div class="col-3">
            <h3>Song</h3>
        </div>
        <div class="col-3">
            <h3>Duration</h3>
        </div>
        <div class="col-6">
            <h3>Play</h3>
        </div>
    </div>
    <?php
    for ($i = 0; $i < sizeof($songName); $i++) {
        echo "<div class='row songs'>";

        echo "<div class='col-3'>
                <p> $songName[$i] </p>
            </div>";

        echo "<div class='col-3'>
                  <p>" . gmdate("H:i:s", $songDuration[$i]) . "</p>
              </div>";

        echo "<div class='col-6'>";
        if ($songYoutubeId[$i] != null) {
            echo "<iframe src='https://www.youtube.com/embed/$songYoutubeId[$i]'
                           class='w-100'
                           allowfullscreen></iframe>";
        } else {
            echo "<p class='font-italic'> No video in database to play </p>";
        }
        echo "</div>";

        echo "</div>";
    }
    ?>
</div>

</body>
</html>
