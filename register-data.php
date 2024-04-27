<?php
include 'database/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $batch = $_POST["batch"];
    $password = $_POST["password"];
    $rep_password = $_POST["rep_password"];


    if ($password == $rep_password) {

        // Fetch data from the hospital table
        $sql = "SELECT * FROM hospital WHERE email = '$email'";
        $result = $conn->query($sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {

            echo "<script>alert('User already Exist.')</script>";
        } else {

            $sql = "INSERT INTO `hospital` (`id`, `email`, `batch`, `f_name`, `l_name`, `phone_no`, `address`, `password`) 
        VALUES (NULL, '$email', '$batch', '$fname', '$lname', '$phone_no', '$address', '$password');";
            $result = mysqli_query($conn, $sql);

            echo "<script>";
            echo "location.replace('login.php')";
            echo "</script>";
        }
    }
}
// Close database connection
$conn->close();
?>