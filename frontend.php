<?php
    include_once 'source/session.php';   
?>



<html>
 <head>
     
     
     		<!-- Meta -->
		<meta charset="utf-8">
		<title>NED CAMPUS MAP</title>

		<!-- Viewport for Responsivity -->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">-->

		<!-- Favicon -->
		<!--<link rel="shortcut icon" type="image/png" href="favicon.png"/>-->

		<!--<meta name="description" content="Mapplic Fullscreen Map">-->

		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="mapplic/mapplic.css">
     
     
     
     
     
     <!--<title> NED CAMPUS MAP</title>-->
     <link rel="stylesheet" href="homestyle.css">
    <!-- <meta name="viewport" content ="width=device-width,initial-scale=1.0">-->
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


  <section class="header">
        

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

       
      
  </section>


  <section class="mapsection">
    <div class="mapmap">
		<!-- Map -->
		<div id="mapplic"></div>
    

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/magnific-popup.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="mapplic/mapplic.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var css = '.mapplic-filtered svg [id^=landmark] > * {opacity: 1 !important; }';

				var mapplic = $('#mapplic').mapplic({
					source: 'NEDMAP11.json',
					height: 700,
                    mapfill: true,
					landmark: false,
                    lightbox: true,
					sidebar: true,
					search: true,
					searchdescription: true,
					minimap: false,
					marker: 'circle',
					fillcolor: false,
                    
					fullscreen: true,
					developer: false,
					thumbholder: true,
                    
					maxscale: 4
				});
			});
		</script>
    
    
       </div>
   </section>
    
    
    
    
    
    <!--<section class="titlebar">
    <div class="container">
        <h1 class="title">NED CAMPUS MAP</h1>
        </div>
    </section>-->
    
  <!--<div class="fullarea">-->
      <!--<div class="maparea"></div>-->
      <br>
      
   <!-- <div id="newarea"> 
        <br><br>
        <div class="contactarea"><br><p id="fontnew"> CONTACT US</p>
        <br><br><p id="fontnew1"> GIVE US A FEEDBACK ON OUR EMAIL</p>
            <br><br><br> <a href="mailto: nedmap7@gmail.com" title="click here for feedback"><p id="fontnew2">CLICK HERE</p></a>
            
        </div>
        
    </div>-->
    <div class="footer"><br>
        <p id="foot1"> THANKS FOR VISITING</p>  <p id="foot2"> DESIGNED BY THE HAMZA USAMA KHALID TEAM </p>
        <br><p id="foot3">&copy; All rights reserved</p>
    </div>
    
    
    
    </body>

</html>