<?php
$code = null;
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Error serving album page </title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/song.css">

<body>

<div class="container header">
    <div class="row border border-white rounded">
        <div class="col-3">
            <img class="logo" src="../imgs/logo.png" alt="Company Logo">
        </div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2">
            <p class="items"><a href="../index.php#home">Home</a></p>
        </div>
        <div class="col-2">
            <p class="items"><a href="../index.php#about">About</a></p>
        </div>
    </div>
</div>

<div class="container containerSongs">
    <h1 align="center">Error serving album page</h1>
    </br>  </br>
    <div class="row align-items-center justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle-fill mb-5 w-75"
                 viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <?php
            echo "<h5>";
            switch ($code) {
                default:
                    echo "You're seeing this error page because of some error";
                    break;
                case 1:
                    echo "You're seeing this error page because there was a request
                          with no information supplied as to which album to display.";
                    break;
                case 2:
                    echo "You're seeing this error page because there was a request
                          for an album name that doesn't exit in our database.";
                    break;
            }
            echo " Please go back or to the <a href='/'>homepage</a>.</h5>";
            ?>
        </div>
    </div>
</div>

</body>
</html>

