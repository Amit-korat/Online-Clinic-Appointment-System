<?php
// Step 1: Establish a connection to the database
include 'database/dbconnect.php';

// Step 2: Execute a SELECT query on the database table
$sql = "SELECT * FROM Doctors";
$result = mysqli_query($conn, $sql);

// Step 3: Store the retrieved data in an array or object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Step 4: Loop through the array or object and display the data in an HTML table format
foreach ($data as $row) {
    echo "<option>" . $row['name'] . "</option>";
}

// Step 5: Close the database connection
mysqli_close($conn);
?>