<?php
session_start();
include('db_connection.php');

if(isset($_POST['Email']) && isset($_POST['password'])) {
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $_SESSION['Email'] = $Email;

    // Validate Email and password (you may need to hash the password)
    $sql = "SELECT * FROM userdetails WHERE Email = '$Email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        header("Location: ../home/home.html");
        exit();
    } else {
        header("Location: ./login.html?error=1");
        exit();
    }
}