<?php
include 'database/dbconnect.php';


if ($_POST) {

    $d_id = $_POST["d_id"];

    // Fetch existing patient details from the database
    $sql = "SELECT * FROM Doctors WHERE d_id = '$d_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Extract existing values
        $name = isset($_POST["name"]) ? $_POST["name"] : $row['name'];
        $address = isset($_POST["address"]) ? $_POST["address"] : $row['address'];
        $phone_no = isset($_POST["phone_no"]) && $_POST["phone_no"] !== '' ? $_POST["phone_no"] : $row['phone_no'];
        $dob = isset($_POST["dob"]) && $_POST["dob"] !== '' ? $_POST["dob"] : $row['dob'];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : $row['gender'];
        $position = isset($_POST["position"]) ? $_POST["position"] : $row['position'];
        $department = isset($_POST["department"]) ? $_POST["department"] : $row['department'];
        $roomno = isset($_POST["roomno"]) ? $_POST["roomno"] : $row['roomno'];

        // Update the doctor details in the database
        $update_fields = array();
        if ($name !== '')
            $update_fields[] = "`name` = '$name'";
        if ($address !== '')
            $update_fields[] = "`address` = '$address'";
        if ($phone_no !== '')
            $update_fields[] = "`phone_no` = '$phone_no'";
        if ($dob !== '')
            $update_fields[] = "`dob` = '$dob'";
        if ($gender !== '')
            $update_fields[] = "`gender` = '$gender'";
        if ($position !== '')
            $update_fields[] = "`position` = '$position'";
        if ($department !== '')
            $update_fields[] = "`department` = '$department'";
        if ($roomno !== '')
            $update_fields[] = "`roomno` = '$roomno'";

        $update_query = "UPDATE `Doctors` SET " . implode(', ', $update_fields) . " WHERE `Doctors`.`d_id` = '$d_id';";
        $result = mysqli_query($conn, $update_query);

        if ($result) {
            echo "<script>alert('Doctor details updated successfully.')</script>";
            echo "<script>location.replace('doctors.php')</script>";
        } else {
            echo "<script>alert('Failed to update doctor details.')</script>";
        }
    } else {
        // echo "<script>alert('Doctor not found.')</script>";
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
                                <label>D.id</label>
                                <input type="number" class="form-control" name="d_id" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phone_no" maxlength="10">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Trans</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Position</label>
                                <select name="position" class="form-control">
                                    <option></option>
                                    <option>Sr. </option>
                                    <option>Jr. </option>
                                    <option>Intern</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Department</label>
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
                                <label>Room No.</label>
                                <select name="roomno" class="form-control">
                                    <option></option>
                                    <option>101</option>
                                    <option>201</option>
                                    <option>301</option>
                                    <option>401</option>
                                    <option>501</option>
                                    <option>601</option>
                                </select>
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