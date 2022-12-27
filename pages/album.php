<?php
require_once('../include/config.php');
$category=$_GET['category'];

$query=mysqli_query($sql,'SELECT * FROM album 
                                JOIN genre ON genre.id=album.genre_id
                                WHERE genre.name="' .$category .'"');
$row=mysqli_fetch_all($query);
$albumTitle=array();
for($i=0;$i<sizeof($row);$i++){
    $albumTitle[$i]=$row[$i][3];
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Album</title>
    <link rel="stylesheet" href="../css/album.css">
</head>
<body>

<h1>This is the album page</h1>
<div class="container">
  <?php
    for($i=0;$i<sizeof($row);$i++){
        echo " $albumTitle[$i]</br>";
    }
  ?>
</div>


</body>
</html>
