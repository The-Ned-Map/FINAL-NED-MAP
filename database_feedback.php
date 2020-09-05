<?php
    require_once 'source/db_connect.php';


    if(isset($_POST['my_submit'])){

        $user_name = $_POST['my_user_name'];
        $email_address = $_POST['my_email'];
        $subject = $_POST['my_subject'];
        $message = $_POST['my_message'];

        try{
            $sql_insert = "INSERT INTO feedback_info (USER_NAME, EMAIL_ADDRESS, SUBJECT, MESSAGE, DATE_TIME)
            VALUES (:USER_NAME, :EMAIL_ADDRESS, :SUBJECT, :MESSAGE, current_timestamp())";
            $statement = $conn->prepare($sql_insert);
            $statement->execute(array(':USER_NAME'=>$user_name, ':EMAIL_ADDRESS'=>$email_address,':SUBJECT'=>$subject, ':MESSAGE'=>$message));
             if($statement->rowcount()==1){
                 $result = header('location: feedback.html');
            }
        }

        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }


    }

?>