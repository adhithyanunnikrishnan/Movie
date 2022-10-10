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

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">gggg</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">ffffff</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="indexuser.php">Home</a></li>
            <li><a class="smoothscroll" href="booking.php">Booking</a></li>
            <li><a class="smoothscroll" href="logout.php">Logout</a></li>
           
         </ul> <!-- end #nav -->
      </nav> <!-- end #nav-wrap -->
      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">CINEMA TICKET BOOKING</h1>
         </div>
      </div>
      <p class="scrolldown">
         <a class="smoothscroll" href="#admin.php"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->
   <!-- Admin Section
   ================================================== -->
   <section id="admin">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />
 </div>
      
<div class="nine columns main-col">
<center><h2>BOOKING</h2></center>             
   <center>
        <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td><label>Name:</label><input type="text" name="name"  class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>Mobile no:</label><input type="text" name="mobileno" class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>Number of seats:</label><input type="text"name="numberofseats"  class="form-control"  style="width:300px;" 
      </td>
    </tr>
    <tr>
      <td><label>Seat type:</label>
    <label>Platinum</label><input type="radio"name="seattype"value="platinum">
    <label>Gold</label><input type="radio"name="seattype"value="gold"></td>   
 </tr>
<tr>
      <td><label>Time:</label>
 <label>10:00am</label><input type="radio"name="time"value="10:00am">
<label>02:00pm</label><input type="radio"name="time"value="02:00pm">
<label>06:00pm</label><input type="radio"name="time"value="06:00pm">
</td>   
    </tr>
    <tr>
      <td><label>Payment mode:</label><br>
<label>Net banking</label><input type="radio"name="paymentmode"value="netbanking">
<label>Cash at counter</label><input type="radio"name="paymentmode"value="cashatcounter"></td>
    </tr>
  <tr>
      <td><label>Date:</label><br>
<input type="text" name="date" class="form-control" style="width:300px;"id="datepicker"required/>
</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="booking" class="btn btn-primary" style="margin-top:5px;" style="width:300px;"/></td>
    </tr>
  </table>
        </form></center>
<?php
if(isset ($_POST['submit']))
{
	
	$name=$_POST['name'];
	$mobileno=$_POST['mobileno'];	
	$numberofseats=$_POST['numberofseats'];
                   $seattype=$_POST['seattype'];
                   $time=$_POST['time']; 
	$paymentmode=$_POST['paymentmode'];
                   $date=$_POST['date'];
                   $qry="INSERT INTO booking(name,mobileno,numberofseats,seattype,time,paymentmode,date) VALUES ('$name','$mobileno','$numberofseats','$seattype','$time','$paymentmode','$date')";
	mysqli_query($con,$qry);
?>
                            <script>
                                alert("booking completed successfully");
                                </script>
          <?php
}
?>
       
</section> <!-- Admin Section End-->


</body>

</html>