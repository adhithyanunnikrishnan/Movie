<?php

$con=mysqli_connect("localhost","root","") or die("No connection");
$db=mysqli_select_db($con,"ticketbook") or die("No Db Selected");

?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Ceevee Web Design</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/test.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">
7
      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">mmm</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">llllll</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="index.php">Home</a></li>
            <li><a class="smoothscroll" href="login.php">Login</a></li>
	         <li><a class="smoothscroll" href="register.php">Register</a></li>
            <!-- <li><a class="smoothscroll" href="indexadmin.php">Admin</a></li>
            <li><a class="smoothscroll" href="booking.php">Booking</a></li>
-->
            
           
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">ONLINE CINEMA TICKET BOOKING</h1>
            <h3>Movie ticket booking in web system is basically made for providing the customers an anytime and anywhere 
               service for booking cinema tickets and providing information regarding movies and their online schedule.</h3>
            <hr />
            
         </div>
      </div>

     
   </section>
        
   <!------------->

   
</body>

</html>