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

         

         <ul id="nav" class="nav">
         <li class="current"><a class="smoothscroll" href="index.php">Home</a></li>
            <li><a class="smoothscroll" href="login.php">Login</a></li>
	         <li><a class="smoothscroll" href="register.php">Register</a></li>
            <li><a class="smoothscroll" href="booking.php">Booking</a></li>
            
            
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
<center><h2>User Registration</h2></center>             
   <center>
        <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td><label>Name</label><input type="text" name="name"  class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>User id</label><input type="text" name="userid" class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>Password</label><input type="text" name="password" class="form-control"  style="width:300px;" 
      id="datepicker"/></td>
    </tr>
    <tr>
      <td><label>Phone no</label><input type="text" name="phoneno" value="" class="form-control" style="width:300px;" /></td>
    </tr>
    <tr>
      <td><label>Email</label><input type="text" name="email" value=""  class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>Age</label><input type="text" name="age" value="" class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>City</label><input type="text" name="city" value="" class="form-control" style="width:300px;"/></td>
    </tr>
  
    <tr>
      <td><input type="submit" name="submit" value="Register" class="btn btn-primary" style="margin-top:5px;" style="width:300px;"/></td>
    </tr>
  </table>
        </form></center>
<?php
if(isset ($_POST['submit']))
{
	
	$name=$_POST['name'];
	$userid=$_POST['userid'];	
	$password=$_POST['password'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$city=$_POST['city'];

	 $qry="INSERT INTO register(name, userid,password,phoneno,email,age, city) VALUES ('$name','$userid','$password','$phoneno','$email','$age','$city')";
	mysqli_query($con,$qry);
?>
                            <script>
                                alert("regestratin completed successfully");
                                </script>
          <?php
}
?>  
       
</section> <!-- Admin Section End-->


</body>

</html>