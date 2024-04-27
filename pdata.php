<?php

include 'database/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $phone_no = $_POST["phone_no"];
    $dob = $_POST["dob"];
    $doctor = $_POST["doctor"];
    $inputAddress = $_POST["inputAddress"];
    $department = $_POST["department"];
    $room_no = $_POST["room_no"];
    $rdname = $_POST["rdname"];

    // Count occurrences of the selected department
    $countQuery = "SELECT COUNT(*) AS count FROM Patients WHERE department = ?";
    $stmt = $conn->prepare($countQuery);
    $stmt->bind_param("s", $department);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $departmentCount = $row['count'];

    // Check if the department count is 3 or more
    if ($departmentCount >= 3) {
        echo "<script>alert('Not enough space in this ward.')</script>";
    } else {
        // Proceed with insertion
        $sql = "INSERT INTO Patients (fname, lname, gender, phone_no, dob, doctor, inputAddress, department, room_no, rdname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $fname, $lname, $gender, $phone_no, $dob, $doctor, $inputAddress, $department, $room_no, $rdname);
        $stmt->execute();

        echo "<script>";
        echo "location.replace('patients.php')";
        echo "</script>";
    }
}

// Close database connection
$conn->close();
?>