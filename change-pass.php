<?php
include 'database/dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n_pass = $_POST['n_pass'];
    $rn_pass = $_POST['rn_pass'];

    $sql = "SELECT * FROM hospital WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        if ($n_pass === $rn_pass) {

            $sql = "UPDATE hospital SET password = '$n_pass' WHERE hospital.email = '$email';";
            $result = mysqli_query($conn, $sql);

            echo "<script>alert('Password is now changed.')</script>";

        } else {

            echo "<script>alert('Enter a same password in both field!')</script>";

        }

    }
}
// Close database connection
$conn->close();

?>