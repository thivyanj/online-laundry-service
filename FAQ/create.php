<?php
require 'db_connection.php';
session_start();

if (isset($_POST['submit_faq'])) {    
    $email = $_POST['email'];
    $_SESSION["userinputmail"] = $email; 
}


if (isset($_POST['submit_faq'])) {

    $email = $_POST['email'];
    $question = $_POST['question'];

    $sql_query = "INSERT INTO questions (email, question) VALUES ('$email', '$question')";

    if (mysqli_query($conn, $sql_query)) {
        header("Location: faqmain.php");
        exit();
    } 
    else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>