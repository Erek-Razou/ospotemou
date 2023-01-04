<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/admin-login.php");
    exit();
}

require_once('../../include/config.php');

$id = $_GET['id'];

// Get artist name for redirect on success
$result = mysqli_query($sql, "SELECT artist.name
                                    FROM album
                                    JOIN artist ON album.artist_id = artist.id
                                    WHERE album.id = $id");
$artistName = mysqli_fetch_row($result)[0];

$del = mysqli_query($sql, "DELETE FROM album WHERE id = '$id'");

if ($del) {
    mysqli_close($sql); // Close connection
    header("location:../albums.php?artist=$artistName");
    exit;
} else {
    echo "Error deleting record";
}