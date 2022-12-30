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
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                     class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-6">
                <h1>Login</h1>

                <div class="card-body py-5 px-md-5">
                    <form action="../include/loginLogic.php" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text"   class="form-control" name="username" />
                            <label id="username" class="form-label" >Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password"  class="form-control" name="password"/>
                            <label id="password" class="form-label" >Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<!-- Section: Design Block -->
</body>
</html>