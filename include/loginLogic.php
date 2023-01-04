<?php

session_start();
require_once('config.php');

if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: ../pages/admin-login.php?error=true");
    exit();
}
$username = $_POST["username"];
$password = $_POST["password"];


$query=mysqli_query($sql, 'SELECT * FROM admin WHERE username ="' .$username .'"');
$row = mysqli_fetch_assoc($query);
if ($row == null) {
    header("Location: ../pages/admin-login.php?error=true");
    exit();
}

if(password_verify($password,$row["password"])){
    $_SESSION["id"] = $row["id"];
    header("Location: ../admin-pages/dashboard.php");
}else{
    header("Location: ../pages/admin-login.php?error=true");
}
