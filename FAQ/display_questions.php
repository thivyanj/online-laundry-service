<?php

    require 'db_connection.php';            

    if (isset($_SESSION["userinputmail"]) && !empty($_SESSION["userinputmail"])) {

        $sql = "SELECT * FROM questions WHERE email = '{$_SESSION["userinputmail"]}' ORDER BY question_id ASC";

        $id=1;

        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            $qid = $row['question_id'];
            $displaymail = $row['email'];
            $dispalyquestion = $row['question']

?>

    <table>
        <tr class="display-questions-box">
            <td id="display-questions"><?php echo $dispalyquestion ?> </td>
            <td><button class="display-questions-button"><a  href = 'edit.php?edit=<?php echo $qid ?> '><img src="./images\edit-icon.png" class="form-button-icon"></a></button></td>
            <td><button class="display-questions-button"><a href = 'delete.php?del=<?php echo $qid ?>'><img src="./images\delete-icon.png" class="form-button-icon"></a></button></td>
        </tr>
    </table>

    <?php 
            $id++; 
        }
    }

    ?>