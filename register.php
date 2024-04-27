<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favi.png">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image"
                            style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <br>
                            <form class="user" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="text" id="exampleFirstName" placeholder="First Name" name="fname"
                                            required>
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                            id="exampleLastName" placeholder="Last Name" name="lname" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="number"
                                            id="examplephoneNumber" placeholder="Phone Number" name="phone_no" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="text" id="exampleInputAddress" placeholder="Address" name="address"
                                            required>
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                            id="examplebatch" placeholder="Batch (Morning/Evening)" name="batch"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="password" id="examplePasswordInput" placeholder="Password"
                                            name="password" required></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                            id="exampleRepeatPasswordInput" placeholder="Repeat Password"
                                            name="rep_password" required></div>
                                </div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Register
                                    Account</button>
                                <hr>
                                <a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"
                                    href="forgot-password.php">Forgot Password?</a>
                                <a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"
                                    href="login.php">Already have an account? Login!</a>
                            </form>
                            <?php include 'register-data.php'; ?>
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