<?php
session_start();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ospotemou</title>

    <link rel="stylesheet" href="css/ospotemou.css">

</head>
<body id="home">

<!-- Page Navigation -->
<nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imgs/logo.png" alt="Company Logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-pages/dashboard.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Of Page Navigation -->

<!-- Page Header -->
<header class="header">
    <div class="overlay">
        <h6 class="subtitle">Let the music get you</h6>
        <h1 class="title">Ospotemou</h1>
    </div>
</header>
<!-- End Of Page Header -->
<!-- Box -->
<div class="box text-center">
    <div class="box-item">
        <h2 class="cat-title"><b>Categories</b></h2>
        <h6>Choose one</h6>
        <table class="categories">
            <tr>
                <td> <a href="pages/album.php?category=pop">pop</a> </td>
                <td><a href="pages/album.php?category=rap">rap</a></td>
                <td><a href="pages/album.php?category=rock">rock</a></td>
            </tr>
            <tr>
                <td><a href="pages/album.php?category=metal">metal</a></td>
                <td><a href="pages/album.php?category=polish_rock">polish rock</a></td>
                <td><a href="pages/album.php?category=godlike" style="color:goldenrod;">GodLike</a></td>
            </tr>
        </table>
    </div>
</div>
<!-- End of Box -->

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="aboutImageDiv">
                <img src="imgs/about.jpg" alt="About image" class="img-thumbnail aboutImg">
            </div>
            <div class="col-md-7 col-lg-8">
                <h6 class="section-subtitle">You demand</h6>
                <h6 class="section-title ">We Create</h6>
                <p>You speak, we listen! Our priority is to make you happy. A small team but with 10 times the will.</p>
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->

<!-- About Section with bg -->
<section class="has-bg-img py-md">
    <div class="container text-center">
        <h6 class="section-subtitle">We Hear</h6>
        <h6 class="section-title mb-6">What Other Don't hear.</h6>
    </div>
</section>
</body>
</html>
