<?php
// Include database connection details
include 'database/dbconnect.php';

// Function to redirect to a given URL
function redirect($url)
{
    echo "<script>window.location.replace('$url');</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from POST data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch data from the hospital table
    $sql = "SELECT * FROM hospital WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);

    // Check if there is any data
    if ($num == 1) {
        // Set session variable
        $_SESSION['username'] = $email;

        // If checkbox is checked, set cookies
        if (isset($_POST['checkbox'])) {
            setcookie("username", $email);
            setcookie("password", $password);
        } else {
            // Clear cookies if checkbox is not checked
            setcookie("username", "");
            setcookie("password", "");
        }

        // Redirect to dashboard
        redirect('dashboard.php');
    } else {
        // Display error message for incorrect username or password
        echo "<div class='alert alert-danger' role='alert'> Incorrect Username or Password—check it out!</div>";
    }
}

// Close the database connection
$conn->close();
?>