<?php
// Step 1: Establish a connection to the database
include 'database/dbconnect.php';


// Step 2: Execute a SELECT query on the database table
$sql = "SELECT * FROM Patients";
$result = mysqli_query($conn, $sql);

// Step 3: Store the retrieved data in an array or object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Step 4: Loop through the array or object and display the data in an HTML table format
echo "<table class='table' id='dataTable' style='font-size: smaller;'>";
echo "<thead style='color: black;'>";
echo "<tr><th>P.Id</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>First Name</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Last Name</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Gender</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Phone no.</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>dob</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Doctor</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Address</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Department</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Room/Bed</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Reference Dr.</th>
<th style='min-width: 10px;text-align: center;vertical-align: middle;'>Actions</th>
</tr>";
foreach ($data as $row) {
    echo "<tr>
    <td><button type='button' class='btn btn-info'>" . $row['p_id'] . "</button></td>
    <td>" . $row['fname'] . "</td>
    <td>" . $row['lname'] . "</td>
    <td>" . $row['gender'] . "</td>
    <td>" . $row['phone_no'] . "</td>
    <td>" . $row['dob'] . "</td>
    <td>" . $row['doctor'] . "</td>
    <td>" . $row['inputAddress'] . "</td>
    <td>" . $row['department'] . "</td>
    <td>" . $row['room_no'] . "</td>
    <td>" . $row['rdname'] . "</td>
    <td><button type='button' class='btn btn-outline-danger' onclick='deleteRow(" . $row['p_id'] . ")'>Delete</button></div></td></tr>";

}
echo "</thead>";
echo "</table>";

// Get row ID from query string
$row_id = $_GET["row_id"];

// Delete row from database
$sql = "DELETE FROM Patients WHERE p_id = '$row_id'";
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
            xhr.open("GET", "ptable.php?row_id=" + rowId, true);
            xhr.send();
            window.location.reload();
        }
    }
</script>