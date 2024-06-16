<?php

require 'db_connection.php';

$edit = $_GET['edit'];


// Fetching question details for editing
if(isset($_GET['edit'])) {
    
    
    // Fetch question details from the database
    $sql = "SELECT * FROM questions WHERE question_id = '$edit'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $displaymail = $row['email'];
        $displayquestion = $row['question'];
    } else {
        echo "Question not found.";
        exit();
    }
}

// Form submission handling
if(isset($_POST['submit_faq'])) {   
    $displayemail = $_POST['email'];
    $displayquestion = $_POST['question'];

    // Update the existing question in the database
    $sql_query = "UPDATE questions SET email = '$displayemail', question = '$displayquestion' WHERE question_id = '$edit'";

    if (mysqli_query($conn, $sql_query)) {
        header("Location: faqmain.php");
        exit(); // Stop script execution after redirection
    } else {
        // If update fails, output error message
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE HTML>
<html>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <head>
        <title>PureTide FAQ</title>
        <link rel="icon" href="../FAQ/images/web-icon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/faq_style.css">
    </head>

    <body>
        <div class="intro">
            <h4 id="faq-title">Frequently Asked Questions</h4>
        </div>

        <div class="ask-box">
            <h4 id="ask-box-title">Ask Your Question</h4>
            <h6 id="ask-box-subtitle">We look forward to helping you create and maintain a clean, healthy<br>environment that's as enjoyable as it is functional.</h6>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?edit=$edit"; ?>" method="post" id="submit-form">

                <input type="email" id="input-email" name="email" value="<?php echo $displaymail ?>" readonly ><br>
                <input type="textarea" id="input-question" name="question" value="<?php echo $displayquestion ?>" ><br>
                <input type="submit" value="Edit-Question" id="submit-button" name="submit_faq">

            </form>
        </div>
    
    </body>
</html>