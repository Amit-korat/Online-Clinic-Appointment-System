<?php

include 'database/dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $p_id = $_POST["p_id"];

    // Fetch existing patient details from the database
    $sql = "SELECT * FROM Patients WHERE p_id = '$p_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Extract existing values
        $fname = isset($_POST["fname"]) ? $_POST["fname"] : $row['fname'];
        $lname = isset($_POST["lname"]) ? $_POST["lname"] : $row['lname'];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : $row['gender'];
        $phone_no = isset($_POST["phone_no"]) && $_POST["phone_no"] !== '' ? $_POST["phone_no"] : $row['phone_no'];
        $dob = isset($_POST["dob"]) && $_POST["dob"] !== '' ? $_POST["dob"] : $row['dob'];
        $doctor = isset($_POST["doctor"]) ? $_POST["doctor"] : $row['doctor'];
        $inputAddress = isset($_POST["inputAddress"]) ? $_POST["inputAddress"] : $row['inputAddress'];
        $department = isset($_POST["department"]) ? $_POST["department"] : $row['department'];
        $room_no = isset($_POST["room_no"]) ? $_POST["room_no"] : $row['room_no'];
        $rdname = isset($_POST["rdname"]) ? $_POST["rdname"] : $row['rdname'];

        // Update the patient details in the database
        $update_fields = array();
        if ($fname !== '')
            $update_fields[] = "`fname` = '$fname'";
        if ($lname !== '')
            $update_fields[] = "`lname` = '$lname'";
        if ($gender !== '')
            $update_fields[] = "`gender` = '$gender'";
        if ($phone_no !== '')
            $update_fields[] = "`phone_no` = '$phone_no'";
        if ($dob !== '')
            $update_fields[] = "`dob` = '$dob'";
        if ($doctor !== '')
            $update_fields[] = "`doctor` = '$doctor'";
        if ($inputAddress !== '')
            $update_fields[] = "`inputAddress` = '$inputAddress'";
        if ($department !== '')
            $update_fields[] = "`department` = '$department'";
        if ($room_no !== '')
            $update_fields[] = "`room_no` = '$room_no'";
        if ($rdname !== '')
            $update_fields[] = "`rdname` = '$rdname'";


        // Query to count occurrences of given department
        $countQuery = "SELECT COUNT(*) AS count FROM Patients WHERE department = '$department'";
        $countResult = mysqli_query($conn, $countQuery);

        if ($countResult) {
            $countRow = mysqli_fetch_assoc($countResult);
            $departmentCount = $countRow['count'];

            // Check if department count exceeds the limit
            if ($departmentCount >= 3) {
                echo "<script>alert('Not enough space in this ward.')</script>";
            } else {

                $update_query = "UPDATE `Patients` SET " . implode(', ', $update_fields) . " WHERE `Patients`.`p_id` = '$p_id';";
                $result = mysqli_query($conn, $update_query);

                if ($result) {
                    echo "<script>alert('Patient details updated successfully.')</script>";
                    echo "<script>location.replace('patients.php')</script>";
                } else {
                    echo "<script>alert('Failed to update patient details.')</script>";
                }
            }
        }
    } else {
        // echo "<script>alert('Patient not found.')</script>";
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Patient Information
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>P.id</label>
                                <input type="number" class="form-control" name="p_id" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mname">Last name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Trans</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone_no">Phone Number</label>
                                <input type="number" class="form-control" name="phone_no">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor">Doctor</label>
                                <select name="doctor" class="form-control">
                                    <option></option>
                                    <?php include 'doct-name.php'; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="inputAddress">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                <select name="department" class="form-control">
                                    <option></option>
                                    <option>Orthopaedic</option>
                                    <option>Pediatric</option>
                                    <option>Cardiovascular</option>
                                    <option>Neurological</option>
                                    <option>Vestibular</option>
                                    <option>Geriatric</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="room_no">Room Name - Bed Number</label>
                                <select name="room_no" class="form-control">
                                    <option></option>
                                    <?php include 'select-room.php'; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rdname">Reference Doctor</label>
                                <input type="text" class="form-control" name="rdname">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>