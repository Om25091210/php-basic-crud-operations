<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";
$con = mysqli_connect("localhost:3307", 'root', '', 'crud');
if (!$con) {
    die("Error detected: " . mysqli_connect_error());
}
else{
    echo"Connection established successfully";
}
?>
