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
    $totalDuration += $songDuration[$i];
}

$totalDurationAll=gmdate("H:i:s", $totalDuration);





?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/song.css">

<body>

<div class="container">
    <h1 align="center"><?=$album ?></h1>
    </br>  </br>
  <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
          <img class="albumImage" src="<?=$albumImage?>"/>
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
    for($i=0;$i<sizeof($songName);$i++){?>
    <div class="row songs">
        <div class="col-6">
            <p><?=$songName[$i]?></p>
        </div>
        <div class="col-6">
            <p><?=gmdate("H:i:s", $songDuration[$i])?></p>
        </div>
    </div>
    <?php } ?>
    </br>  </br>  </br>
</div>



</body>
</html>
