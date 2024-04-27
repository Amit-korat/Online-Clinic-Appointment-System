<?php
// Step 1: Establish a connection to the database
include 'database/dbconnect.php';

// Step 2: Execute a SELECT query on the database table
$sql = "SELECT * FROM Appointments";
$result = mysqli_query($conn, $sql);

// Step 3: Store the retrieved data in an array or object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Step 4: Loop through the array or object and display the data in an HTML table format
echo "<table class='table' id='dataTable' style='font-size: smaller;'>";
echo "<thead style='color: black;'>";
echo "<tr><th>A.Id</th>
<th style='min-width: 10px;'>Fist Name</th>
<th style='min-width: 10px;'>Last Name</th>
<th style='min-width: 10px;'>Phone no.</th>
<th style='min-width: 10px;'>Doctor</th>
<th style='min-width: 10px;'>Department</th>
<th style='min-width: 10px;'>Date & Time</th>
<th style='min-width: 10px;'>Action</th>
</tr>";
foreach ($data as $row) {
    echo "<tr>
    <td><button type='button' class='btn btn-info'>" . $row['a_id'] . "</button></td>
    <td>" . $row['fname'] . "</td>
    <td>" . $row['lname'] . "</td>
    <td>" . $row['phone_no'] . "</td>
    <td>" . $row['doctor'] . "</td>
    <td>" . $row['department'] . "</td>
    <td>" . $row['appo_date'] . "</td>
    <td><button type='button' class='btn btn-outline-danger' onclick='deleteRow(" . $row['a_id'] . ")'>Delete</button></td></tr>";
}
echo "</thead>";
echo "</table>";

// Get row ID from query string
$row_id = $_GET["row_id"];

// Delete row from database
$sql = "DELETE FROM Appointments WHERE a_id = '$row_id'";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error deleting row: " . mysqli_error($conn);
}

// Step 5: Close the database connection
mysqli_close($conn);
?>

<script>
    function deleteRow(rowId) {
        if (confirm("Are you sure you want to delete this row?")) {
            // Send AJAX request to server to delete row
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        // Row deleted successfully, do something if needed
                        alert(xhr.responseText);
                    } else {
                        // An error occurred while deleting the row
                        alert("Error deleting row");
                    }
                }
            };
            xhr.open("GET", "appoi-table.php?row_id=" + rowId, true);
            xhr.send();
            window.location.reload();
        }
    }
</script>