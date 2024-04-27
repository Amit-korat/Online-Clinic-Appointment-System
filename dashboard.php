<?php
// Start the session
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Include necessary files
include_once 'database/dbconnect.php';

// Function to safely escape user input
function escape($conn, $value)
{
    return mysqli_real_escape_string($conn, $value);
}

// Function to get department counts
function getDepartmentCounts($conn)
{
    $query = "SELECT department, COUNT(*) as count FROM Patients GROUP BY department";
    $result = mysqli_query($conn, $query);
    $departmentCounts = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $departmentCounts[] = $row;
        }
    }

    return $departmentCounts;
}

// Get department counts
$departmentCounts = getDepartmentCounts($conn);

// Calculate total occupied beds and difference
$totalCount = array_reduce($departmentCounts, function ($carry, $item) {
    return $carry + $item['count'];
}, 0);
$difference = 18 - $totalCount;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Dashboard - PTC</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favi.png">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'header.php' ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard - Physiotherapy Clinic</h3>
                    </div>
                    <div class="row">
                        <?php foreach ($departmentCounts as $departmentCount): ?>
                            <div class="col-md-6 col-xl-3 mb-4">
                                <div class="card shadow border-start-success py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                    <span><?php echo htmlspecialchars($departmentCount['department']); ?></span>
                                                </div>
                                                <div class="text-dark fw-bold h5 mb-0">
                                                    <span><?php echo htmlspecialchars($departmentCount['count']); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <span>Total Occupied Beds</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span><?php echo htmlspecialchars($totalCount); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <span>Total Empty Beds</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span><?php echo htmlspecialchars($difference); ?> / 18</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
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
            </div>
            <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>