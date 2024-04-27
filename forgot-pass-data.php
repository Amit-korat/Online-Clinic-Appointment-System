<?php
include 'database/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $rep_password = $_POST["rep_password"];

    if ($password == $rep_password) {

        $sql = "UPDATE `hospital` SET `password` = '$password' WHERE `hospital`.`email` = '$email';";
        $result = mysqli_query($conn, $sql);

        echo "<script>";
        echo "location.replace('login.php')";
        echo "</script>";
    }
}

// Close database connection
$conn->close();

?>