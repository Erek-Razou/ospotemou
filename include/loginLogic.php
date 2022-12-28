<?php

session_start();
require('config.php');
$username = $_POST["username"];
$password = $_POST["password"];


$query=mysqli_query($sql, 'SELECT * FROM admin WHERE username ="' .$username .'"');
$row = mysqli_fetch_assoc($query);
if(password_verify($password,$row["password"])){
    header("Location: ../admin-pages/genre.php");
}else{
    echo "nop";
}
