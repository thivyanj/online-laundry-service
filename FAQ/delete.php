<?php

require 'db_connection.php';


if (isset($_GET['del'])) {
    $delete = $_GET['del'];

    $sql = "DELETE FROM questions WHERE question_id = '$delete'";

    if (mysqli_query($conn, $sql)) {
     
        header("Location: faqmain.php");
        exit(); 
    } else {
       
        echo "Error: " . mysqli_error($conn);
    }
} else {
    
    echo "Error: 'del' parameter is not set.";
}

?>
