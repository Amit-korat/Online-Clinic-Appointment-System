<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favi.png">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <br>
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        <br>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password"
                                                id="exampleInputPassword" placeholder="Password" name="password"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                    <input class="form-check-input custom-control-input" type="checkbox"
                                                        id="formCheck-1" checked><label
                                                        class="form-check-label custom-control-label"
                                                        for="formCheck-1">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary d-block btn-user w-100"
                                            type="submit">Login</button>
                                        <br>
                                        <hr>
                                        <br>
                                        <a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"
                                            href="forgot-password.php">Forgot Password?</a>
                                        <a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"
                                            href="register.php">Create an Account!</a>
                                        <!-- <hr> -->
                                    </form>
                                    <br>
                                    <?php include 'login-data.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>