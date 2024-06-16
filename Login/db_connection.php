<?php

// Database connection parameters
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "puretide";


// Establishing a connection to the MySQL server
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Checking if the connection was successful
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>