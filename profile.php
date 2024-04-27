<?php
// start the session
session_start();

// check if the session variable is not set
if (!isset($_SESSION['username'])) {
    // redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favi.png">

</head>

<body id="page-top">
    <div id="wrapper">

        <?php include 'sidebar.php'; ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'header.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile Information</h3>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <?php include 'reception-data.php'; ?>
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Email Address /
                                                                    Username</strong></label><input class="form-control"
                                                                type="email" id="email"
                                                                placeholder="<?php echo $email; ?>" name="email"
                                                                disabled></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="batch"><strong>Batch</strong></label><input
                                                                class="form-control" type="text" id="batch"
                                                                placeholder="<?php echo $batch; ?>" name="batch"
                                                                disabled></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="f_name"><strong>First Name</strong></label><input
                                                                class="form-control" type="text" id="f_name"
                                                                placeholder="<?php echo $f_name; ?>" name="f_name"
                                                                disabled></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="l_name"><strong>Last Name</strong></label><input
                                                                class="form-control" type="text" id="l_name"
                                                                placeholder="<?php echo $l_name; ?>" name="l_name"
                                                                disabled></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="phone_no"><strong>Phone
                                                                    Number</strong></label><input class="form-control"
                                                                type="tel" id="phone_no" maxlength="10"
                                                                placeholder="<?php echo $phone_no; ?>" name="phone_no"
                                                                disabled></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="address"><strong>Address</strong></label><input
                                                                class="form-control" type="text" id="address"
                                                                placeholder="<?php echo $address; ?>" name="address"
                                                                disabled></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Change Password</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="n_pass"><strong>Enter New
                                                                    Password</strong></label><input class="form-control"
                                                                type="text" id="n_pass" name="n_pass" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="rn_pass"><strong>Re-Enter New
                                                                    Password</strong></label><input class="form-control"
                                                                type="text" id="rn_pass" name="rn_pass" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                    style="display: flex; justify-content:right;">Change
                                                    Password</button>
                                            </form>
                                            <?php include 'change-pass.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <?php include 'footer.php'; ?>

            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>