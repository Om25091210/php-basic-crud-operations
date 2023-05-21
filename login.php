<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "crud";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Error detected: " . mysqli_connect_error());
}

// Retrieve login form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check username and password against database
$sql = "SELECT * FROM student WHERE name = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);

if (!$result) {
    // Query execution failed
    die("Query error: " . mysqli_error($con));
}

if (mysqli_num_rows($result) == 1) {
    // Login successful
    echo "Login successful!";
    // You can redirect to a different page or perform any other actions here
} else {
    // Login failed
    echo "Invalid username or password.";
}


mysqli_close($con);
?>
