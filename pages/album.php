<?php
require('../include/config.php');
$category=$_GET['category'];
$filters="";
if(isset($_POST['filters'])) {
    $filters = $_POST['filters'];
}
if(!empty($filters)) {
    $query=mysqli_query($sql,'SELECT * FROM album
                                JOIN genre ON genre.id=album.genre_id
                                WHERE genre.name="' .$category .'" ORDER BY release_date '.$filters.' ');
}
else {
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
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Album</title>
    <link rel="stylesheet" href="../css/album.css">
</head>
<body>

<h1>This is the album page</h1>
<div class="container">
    <div class="filters">
        <form action="#" method="post">
            <select name="filters">
                <option value="" selected="selected">Any</option>
                <option value="ASC">Release Date ↑</option>
                <option value="DESC">Release Date ↓</option>
            </select>
            <input name="search" type="submit" value="Search"/>
        </form>
    </div>
    <table >
            <?php
             for($i=0;$i<sizeof($albumTitle);$i+=2){
                 echo "<tr>";
                 echo "<td><a href='songs.php?album=$albumTitle[$i]'> <img src='$albumImagePath[$i]'></a></br> 
                 <span class='albumTitle'>$albumTitle[$i]</span> </br><span class='albumReleaseDate'> $albumReleaseDate[$i] </span></td>";
                 echo "<td><a href='songs.php?album=" .$albumTitle[$i+1]."'> <img src='" .$albumImagePath[$i+1]. "'/></a></br> <span class='albumTitle'>" .$albumTitle[$i+1]. " </span></br><span class='albumReleaseDate'>" .$albumReleaseDate[$i+1]. "</span></td>";
                 echo "</tr>";
             }
            ?>
    </table>
</div>


</body>
</html>
