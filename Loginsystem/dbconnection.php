<?php
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "useramit";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    // } else {
    die("error" . mysqli_connect_error());
}
