<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /pages/admin-login.php");
    exit();
}

require_once('../../include/config.php');
$songId = $_GET['id'];

$query = mysqli_query($sql, "SELECT song.album_id, song.name, song.duration, song.position, song.youtube_id,
                                          album.name,
                                          artist.name
                                   FROM song
                                   JOIN album ON song.album_id = album.id
                                   JOIN artist ON album.artist_id = artist.id
                                   WHERE song.id = $songId");
$row = mysqli_fetch_row($query);
$songAlbumId = $row[0];
$songName = $row[1];
$songDuration = $row[2];
$songPosition = $row[3];
$songYoutubeId = $row[4];
$songAlbumName = $row[5];
$songArtistName = $row[6];

$album = array();
$query = mysqli_query($sql, "SELECT album.id, album.name
                                   FROM album
                                   ORDER BY album.name");
$rows = mysqli_fetch_all($query);
foreach ($rows as $row) {
    $album[$row[0]] = $row[1];
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Edit song <?= $songName ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="../dashboard.php">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="../../plugins/images/logo-icon.png" alt="homepage"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../plugins/images/logo-text.png" alt="homepage"/>
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                   href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../index.php"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../categories.php"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Categories</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../artists.php"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Artists</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="../albums.php?artist=<?= $songArtistName ?>"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Albums of <?= $songArtistName ?></span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="../songs.php?album=<?= $songAlbumName ?>"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Songs in <?= $songAlbumName ?></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Edit <?= $songName ?></h4>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <form action="#" method="post">
                                <label for="songName">Song name</label>
                                <input type="text" id="songName" name="songName" value="<?= $songName ?>"/>
                                <label for="songAlbumId" id="songAlbumId"> Album </label>
                                <select id="songAlbumId" name="songAlbumId">
                                    <?php
                                    foreach ($album as $id => $name) {
                                        echo "<option value='$id'";
                                        if ($id == $songAlbumId) {
                                            echo " selected";
                                        }
                                        echo "> $name </option>";
                                    }
                                    ?>
                                </select>
                                <label for="songDuration">Duration in seconds </label>
                                <input type="number" id="songDuration" name="songDuration"
                                       value="<?= $songDuration ?>"/>
                                <label for="songPosition">Position </label>
                                <input type="number" id="songPosition" name="songPosition"
                                       value="<?= $songPosition ?>"/>
                                <label for="songYoutubeId">Youtube ID</label>
                                <input type="text" id="songYoutubeId" name="songYoutubeId"
                                       value="<?= $songYoutubeId ?>"/>
                                <input type="submit" name="submit" value="submit"/>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                $songName = $_POST['songName'];
                                $songAlbumId = $_POST['songAlbumId'];
                                $songDuration = $_POST['songDuration'];
                                $songPosition = $_POST['songPosition'];
                                $songYoutubeId = $_POST['songYoutubeId'];

                                $result = mysqli_query($sql, "UPDATE song
                                                                    SET album_id = $songAlbumId,
                                                                        name = '$songName',
                                                                        duration = $songDuration,
                                                                        position = $songPosition,
                                                                        youtube_id = '$songYoutubeId'
                                                                    WHERE id = $songId");
                                if ($result) {
                                    mysqli_close($sql);
                                    echo "</br></br><div align='center' class='result'>
                                              <h4>Έγινε η αλλαγή με <b>επιτυχία!</b></h4>
                                          </div>";
                                } else {
                                    echo "</br></br><div align='center' class='result'>
                                              <h4 class='text-danger'> Υπήρχε σφάλμα στην επεξεργασία </h4>
                                          </div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="../../js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../js/custom.js"></script>
</body>

</html>
