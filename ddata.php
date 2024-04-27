<?php
include 'database/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone_no = $_POST["phone_no"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $position = $_POST["position"];
    $department = $_POST["department"];
    $roomno = $_POST["roomno"];

    $sql = "SELECT * FROM Doctors WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);


    if ($num == 1) {
        echo "<script>alert('Doctor already Exist.')</script>";
    } else {

        $sql = "INSERT INTO `Doctors` (`d_id`, `name`, `address`, `phone_no`, `dob`, `gender`, `position`, `department`, `roomno`) VALUES (NULL, '$name', '$address', '$phone_no', '$dob', '$gender', '$position', '$department', '$roomno');";
        $result = mysqli_query($conn, $sql);

        echo "<script>";
        echo "location.replace('doctors.php')";
        echo "</script>";
    }
}

// Close database connection
$conn->close();

?>