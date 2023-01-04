<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/admin-login.php");
    exit();
}

require_once('../../include/config.php');

$id = $_GET['id'];

// Get album name for redirect on success
$result = mysqli_query($sql, "SELECT album.name
                                    FROM song
                                    JOIN album ON song.album_id = album.id
                                    WHERE song.id = $id");
$albumName = mysqli_fetch_row($result)[0];

$del = mysqli_query($sql, "DELETE FROM song WHERE id = '$id'");

if ($del) {
    mysqli_close($sql); // Close connection
    header("location:../songs.php?album=$albumName");
    exit;
} else {
    echo "Error deleting record";
}