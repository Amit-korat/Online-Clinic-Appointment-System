<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favi.png">

</head>

<body class="bg-gradient-primary">
    <div class="container" style="margin-top: 8%;">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Forgot Password?</h4>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password"
                                                id="examplePasswordInput" placeholder="Password" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="text"
                                                id="exampleRepeatPasswordInput" placeholder="Repeat Password"
                                                name="rep_password">
                                        </div>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Change
                                            Password</button>
                                        <hr>
                                    </form>
                                    <?php include 'forgot-pass-data.php'; ?>
                                    <div class="text-center"><a class="small" href="login.php">Go Back</a></div>
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