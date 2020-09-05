<?php
    include_once 'source/session.php';   
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="map.png">
    <link rel="stylesheet" href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Feedback form</title>
    <style>
        .btn{
    /* border: 1px solid black; */
    font-size: 15px;
    margin-left: 79px;
    background-color: rgb(68, 202, 68);
    color: white;
    outline: none;
    border: none;
    border-radius: 3px;
    padding: 8px 14px;
       
}
.btn:hover{
    color: black;
}
    </style>
   
</head>

<body>

    <section class="header">
        <div class="navcon">

            <nav class="navbar navbar-expand-lg navbar-light ">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="Profile-icon.png">
                        PROFILE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">USERNAME</a>
                        <a class="dropdown-item" href="#"><?php echo $_SESSION['USER_NAME'];?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">LOG OUT</a>
                    </div>
                </li>

                <a class="navbar-brand" href="#"><img style="margin-left: 50px" src="maplogo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-right">


                        <li class="nav-item ">
                            <a class="nav-link" href="front_end.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-home" href="feedback.html">CONTACT US</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">ABOUT US</a>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>
        
    <div class="container">
        <div class="innercontainer">
            <div class="heading">
                <span>Feel free to</span><br>
                <span>Contact Us</span>

            </div>

            <div class="text">
                <div id="text1">If you have any questions, feel free to</div>
                <div id="text2">contact us. Our Customer Service</div>
                <div id="text3">work 24/7</div>

            </div>

            <form class="form" onsubmit="return validation()" action="database_feedback.php" method="POST">

                <div class="box1">
                    <label for="username">User Name</label><br>
                    <input type="text" id="username" name="my_user_name"><br>
                    <span id="_username" style="color: red;"></span>
                </div>

                <div class="box2">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="my_email"><br>
                    <span id="_myemail" style="color: red;"></span>
                </div>

                <div class="box3">
                    <label for="subject">Subject</label><br>
                    <input type="text" id="subject" name="my_subject"><br>
                    <span id="_mysubject" style="color: red;"></span>
                </div>
                <div class="box4">
                    <label for="message">Message</label><br>
                    <input type="text" id="message" name="my_message"><br>
                    <span id="_mymessage" style="color: red;"></span>
                </div>

                <button class="btn" name="my_submit">Send Message</button>

            </form>
        </div>

    </div>
    </section>

    <script>
        function validation() {


            var my_user_name = document.getElementById('username').value;
            var my_email = document.getElementById('email').value;
            var my_subject = document.getElementById('subject').value;
            var my_message = document.getElementById('message').value;

            if (my_user_name == "") {
                document.getElementById('_username').innerHTML = "*enter user name";
                return false;

            }

            if (my_email == "") {
                document.getElementById('_myemail').innerHTML = "*email should not be empty";
                return false;

            }

            if ((my_user_name.length <= 2) || (my_user_name.length >= 20)) {
                document.getElementById('_username').innerHTML = "*user name must be between 2 and 20 characters";
                return false;
            }

            if (!isNaN(my_user_name)) {
                document.getElementById('_username').innerHTML = "*only characters are allowed";
                return false;
            }

            if ((my_email.charAt(my_email.length - 4) != '.') && (my_email.charAt(my_email.length - 3) != '.')) {
                document.getElementById('_myemail').innerHTML = "*invalid format";
                return false;
            }

            if (my_subject == "") {
                document.getElementById('_mysubject').innerHTML = "*this field should not be empty";
                return false;
            }

            if (!isNaN(my_subject)) {
                document.getElementById('_mysubject').innerHTML = "*only characters are allowed";
                return false;
            }

            if (my_message == "") {
                document.getElementById('_mymessage').innerHTML = "*this field should not be empty";
                return false;
            }

            if (!isNaN(my_message)) {
                document.getElementById('_mymessage').innerHTML = "*only characters are allowed";
                return false;
            }

            alert("Feedback has been submitted");

        }



    </script>
</body>

</html>