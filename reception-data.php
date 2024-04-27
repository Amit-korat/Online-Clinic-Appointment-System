<?php
// start the session
session_start();

// check if the session variable is not set
if (!isset($_SESSION['username'])) {
    // redirect to the login page
    header("Location: login.php");
    exit();
}

include 'database/dbconnect.php';

$username = $_SESSION['username'];

// Fetch data from the hospital table
$sql = "SELECT * FROM hospital WHERE email = '$username';";
$result = $conn->query($sql);

// Check if there is any data
if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
    $email = $row["email"];
    $batch = $row["batch"];
    $f_name = $row["f_name"];
    $l_name = $row["l_name"];
    $phone_no = $row["phone_no"];
    $address = $row["address"];
} else {
    echo "No data found in the hospital table";
}

// Close the database connection
$conn->close();
?>