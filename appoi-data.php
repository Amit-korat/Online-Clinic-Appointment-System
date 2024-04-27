<?php
include 'database/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone_no = $_POST["phone_no"];
    $doctor = $_POST["doctor"];
    $department = $_POST["department"];
    $datetime = $_POST["datetime"];


    $sql = "SELECT * FROM Appointments WHERE fname = '$fname' AND lname = '$lname'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        echo "<script>alert('Appointment already Booked.')</script>";
    } else {

        $sql = "INSERT INTO `Appointments` (`a_id`, `fname`, `lname`, `phone_no`, `doctor`, `department`, `appo_date`) VALUES (NULL, '$fname', '$lname', '$phone_no', '$doctor', '$department', '$datetime');";
        $result = mysqli_query($conn, $sql);

        echo "<script>";
        echo "location.replace('appointments.php')";
        echo "</script>";
    }
    echo "<script>";
    echo "location.replace('appointments.php')";
    echo "</script>";
}
// Close database connection
$conn->close();
?>