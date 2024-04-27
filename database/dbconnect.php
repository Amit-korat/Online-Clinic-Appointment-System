<?php

$server = "localhost";
$username = "root";
$dpassword = "";
$database = "PTC";

//creat connection
$conn = mysqli_connect($server, $username, $dpassword, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
?>
