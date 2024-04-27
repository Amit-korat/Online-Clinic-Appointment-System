<?php
// Step 1: Establish a connection to the database
include 'database/dbconnect.php';

// Fetch already selected options from database
$sql = "SELECT DISTINCT room_no FROM Patients"; // Assuming room_no is the column that stores selected options
$result = $conn->query($sql);

$selectedOptions = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $selectedOptions[] = $row["room_no"];
    }
}

// All options available
$options = array("A-101", "A-102", "A-103", "B-101", "B-102", "B-103", "C-101", "C-102", "C-103", "D-101", "D-102", "D-103", "E-101", "E-102", "E-103", "F-101", "F-102", "F-103");

foreach ($options as $option) {
    if (!in_array($option, $selectedOptions)) {
        echo '<option>' . $option . '</option>';
    }
    // if (in_array($option, $selectedOptions)) {
    //     echo '<option disabled>' . $option . '</option>';
    // } else {
    //     echo '<option>' . $option . '</option>';
    // }
}

// Step 5: Close the database connection
mysqli_close($conn);
?>