<?php
    include_once 'source/session.php';   
?>

<html>
 <head>
     <title> NED CAMPUS MAP</title>
     <link rel="stylesheet" href="style3.css">
     <meta name="viewport" content ="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
     
     <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
     
     <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Rock+Salt&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Berkshire+Swash&family=Rock+Salt&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Permanent+Marker&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Fugaz+One&family=Permanent+Marker&display=swap" rel="stylesheet">
     
     
     
  
     </head>

<body>
    <?php if(!isset($_SESSION['EMAIL_ADDRESS'])) : header("location:logout.php");?> 
    <?php else: ?> 
    <?php endif ?> 
      <a href="feedback.html">Feedback</a>
    <section class="header">
    <div class="container">
    
        <nav class="navbar navbar-expand-lg navbar-light ">
            
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  src="Profile-icon.png">
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-right">
       
        
      <li class="nav-item ">
        <a class="nav-link active-home" href="front_end.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#newarea">CONTACT US</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="aboutus.html" >ABOUT US</a>
      </li>
    </ul>
   
  </div>
</nav>
    
    </div>
        
    </section>
     
    
    <section class="titlebar">
    <div class="container">
        <h1 class="title">NED CAMPUS MAP</h1>
        </div>
    </section>
   <a href="NEDMAPEX1.html" style="padding-left: 40%; padding-top: 10%" >CLICK HERE TO GO TO THE MAP</a>
<!-- <div class="fullarea">-->
     
<!--   <div class="maparea"></div>-->
      <br><br><br>
     
       </div>
                
    <div id="newarea"> 
        <br><br>
        <div class="contactarea"><br><p id="fontnew"> CONTACT US</p>
        <br><br><p id="fontnew1"> GIVE US A FEEDBACK ON OUR EMAIL</p>
            <br><br><br> <a href="mailto: nedmap7@gmail.com" title="click here for feedback"><p id="fontnew2">CLICK HERE</p></a>
            
        </div>
        
    </div>
    <div class="footer"><br>
        <p id="foot1"> THANKS FOR VISITING</p>  <p id="foot2"> DESIGNED BY THE HAMZA USAMA KHALID TEAM </p>
        <br><p id="foot3">&copy; All rights reserved</p>
    </div>
    
    
    
    </body>

</html>

































