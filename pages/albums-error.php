<?php
require_once('../include/config.php');

$code = null;
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Error serving albums page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/album.css">
</head>
<body>

<div class="container header">
    <div class="row border  border-white rounded">
        <div class="col-3">
            <img class="logo" src="../imgs/logo.png" alt="Company Logo">
        </div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2">
            <p class="items"><a href="../index.php#home">Home</a> </p>
        </div>
        <div class="col-2">
            <p class="items"><a href="../index.php#about">About</a> </p>
        </div>
    </div>
</div>



<div class="container albums pb-5">
    <h1 align="center">Error serving albums page</h1>
    <?php
    echo "<h5>";
    switch ($code) {
        default:
            echo "You're seeing this error page because of some error";
            break;
        case 1:
            echo "You're seeing this error page because there was a request
                          with no information supplied as to which genre to display.";
            break;
    }
    echo " Please go back or to the <a href='/'>homepage</a>.</h5>";
    ?>
</div>

</body>
</html>
