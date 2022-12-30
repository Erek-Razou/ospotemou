<?php

session_start();
require('config.php');
$username = $_POST["username"];
$password = $_POST["password"];


$query=mysqli_query($sql, 'SELECT * FROM admin WHERE username ="' .$username .'"');
$row = mysqli_fetch_assoc($query);
if(password_verify($password,$row["password"])){
    $_SESSION["id"] = $row["id"];
    var_dump($username);
    header("Location: ../admin-pages/dashboard.php");
}else{
    header("Location: ../admin-login.php?error=true");
}
