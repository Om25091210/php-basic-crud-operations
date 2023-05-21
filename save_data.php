<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "crud";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Error detected: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$education = $_POST['education'];

// Insert data into the "student" table
$sql = "INSERT INTO student (name, password, gender, education) VALUES ('$name', '$password', '$gender', '$education')";
if (mysqli_query($con, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

