<?php
require_once('../include/config.php');
$album=$_GET['album'];

$query=mysqli_query($sql,"SELECT album.image_path, artist.name
                                FROM album
                                JOIN artist ON artist.id=album.artist_id
                                WHERE album.name='$album'");
$rows=mysqli_fetch_row($query);
$albumImage=$rows[0];
$albumArtist=$rows[1];


$query=mysqli_query($sql,"SELECT song.name, song.duration
                                FROM song
                                JOIN album ON album.id=song.album_id
                                WHERE album.name='$album'");
$rows=mysqli_fetch_all($query);
$songNames=array();
$songDurations=array();
$totalDuration=0;

for($i=0; $i<sizeof($rows); $i++){
    $songNames[$i]=$rows[$i][0];
    $songDurations[$i]= $rows[$i][1];
    $totalDuration += $songDurations[$i];
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
    <h1 align="center"><?=$album ?></h1>
    </br>  </br>
  <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
          <img class="albumImage w-100" src="<?=$albumImage?>"/>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-6 ">
          </br>  </br>
          <h3> <?=$albumArtist?></h3>
          <h6>Total Duration: <?=$totalDurationAll ?></h6>
      </div>
  </div>
    </br>  </br>  </br>
    <div class="row">
        <div class="col-6">
            <h3>Song</h3>
        </div>
        <div class="col-6">
            <h3>Duration</h3>
        </div>
    </div>
    <?php
    for($i=0; $i<sizeof($songNames); $i++){?>
    <div class="row songs">
        <div class="col-6">
            <p><?=$songNames[$i]?></p>
        </div>
        <div class="col-6">
            <p><?=gmdate("H:i:s", $songDurations[$i])?></p>
        </div>
    </div>
    <?php } ?>
    </br>  </br>  </br>
</div>



</body>
</html>
