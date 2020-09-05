<?php
    require_once 'source/db_connect.php';
    require_once 'source/session.php';

    if(isset($_POST['my_login'])){

        $email_address = $_POST['my_email'];
        $password = $_POST['my_password'];

        try{
            $sql_query = "SELECT * FROM signup_info where EMAIL_ADDRESS = :EMAIL_ADDRESS";
            $statement = $conn->prepare($sql_query);
            $statement->execute(array(':EMAIL_ADDRESS'=>$email_address));
            while($row = $statement->fetch())
            {
                $email = $row['EMAIL_ADDRESS'];
                $hashed_password = $row['PASSWORD'];
                $user_name = $row['USER_NAME'];

                if(password_verify($password, $hashed_password)){
                    
                    $_SESSION['USER_NAME'] = $user_name;
                    $_SESSION['EMAIL_ADDRESS'] = $email;
                    header('location: frontend.php');        
                }
                else{
                    echo "Error: Invalid Username or Password";
                }
            }
            }catch (PDPException $e){
                echo "ERROR ".$e->getMessage();
            }
               

    }



?>
