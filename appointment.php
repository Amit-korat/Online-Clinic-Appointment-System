<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Physiotherapy Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favi.png">
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><img src="img/favi.png" alt="Logo"> Physiotherapy Clinic</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="appointment.php" class="nav-item nav-link active">Appointment</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="appointment.php"
                    class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book
                    Appointment</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Book Appointment</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Appointment</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Book Appointment Start -->
    <div class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="appointment-form rounded p-5">
                        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                        <h1 class="display-5 mb-4">Get Appointment</h1>
                        <form method="post">
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent text-dark"
                                        placeholder="First Name" name="fname" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent text-dark"
                                        placeholder="Last Name" name="lname" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="number"
                                        class="form-control py-3 border-primary bg-transparent text-dark"
                                        placeholder="Phone Number" name="phone_no" required>
                                </div>

                                <div class="col-xl-6">
                                    <select name="doctor"
                                        class="form-control py-3 border-primary bg-transparent text-dark" required>
                                        <option selected disabled>Doctor Name</option>
                                        <?php include 'doct-name.php'; ?>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <select class="form-select py-3 border-primary bg-transparent text-dark"
                                        aria-label="Default select example" name="department" required>
                                        <option selected disabled>Department</option>
                                        <option>Orthopaedic</option>
                                        <option>Pediatric</option>
                                        <option>Cardiovascular</option>
                                        <option>Neurological</option>
                                        <option>Vestibular</option>
                                        <option>Geriatric</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <input type="datetime-local" name="datetime"
                                        class="form-control py-3 border-primary bg-transparent text-dark" required>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">CREATE
                                        APPOINTMENT</button>
                                </div>
                            </div>
                        </form>
                        <?php include 'appoi-data-web.php'; ?>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Solutions To Your Pain</h4>
                        <h1 class="display-4 mb-4">Best Quality Services With Minimal Pain Rate</h1>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Body Relaxation
                                        </h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                            deserunt qui cupiditate veritatis enim ducimus.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Body Relaxation
                                        </h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                            deserunt qui cupiditate veritatis enim ducimus.</p>
                                    </div>
                                    <div class="text-start mb-4">
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="img/video-img.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Appointment End -->

    <?php include 'web-footer.php' ?>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>