<?php
session_start();
require('../include/config.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin-login.css">

</head>
<body>
<!-- Section: Design Block -->
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-5 d-none d-lg-flex">
                <img src="../imgs/login.jpg" alt="Login Image"
                     class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-6 login-container">
                <h1>Welcome!</h1>
                <h2>Login</h2>

                <div class="card-body py-5 px-md-5">
                    <form action="../include/loginLogic.php" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label id="username" class="form-label" >Username</label>
                            <input type="text"   class="form-control" name="username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label id="password" class="form-label" >Password</label>
                            <input type="password"  class="form-control" name="password"/>
                        </div>

                        <?php
                        if (isset($_GET['error'])) {
                            echo "<div class='form-outline font-italic text-danger mb-4'>
                                      <p> Τα στοιχεία που εισήχθησαν ήταν λάθος </p>
                                  </div>";
                        }
                        ?>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<!-- Section: Design Block -->
</body>
</html>