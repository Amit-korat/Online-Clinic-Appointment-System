<?php
// $server = "sql300.epizy.com";
// $username = "epiz_34267392";
// $dpassword = "wUQFII0ld1oy";
// $database = "epiz_34267392_PTC";

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