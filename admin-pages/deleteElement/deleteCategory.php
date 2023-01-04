<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/admin-login.php");
    exit();
}

require_once('../../include/config.php');

$id = $_GET['id'];

$del = mysqli_query($sql,"DELETE FROM genre WHERE id = '$id'");

if($del)
{
    mysqli_close($sql); // Close connection
    header("location:../categories.php");
    exit;
}
else
{
    echo "Error deleting record";
}