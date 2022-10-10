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
            <li class="current"><a class="smoothscroll" href="indexadmin.php">Home</a></li>
            <li><a class="smoothscroll" href="admin.php">Add Movie</a></li>
	         <li><a class="smoothscroll" href="logout.php">Logout</a><li>
           
           
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
<h2> <center><h2>ADMIN</h2></center>             
   <center>
        <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
  <td><label>Add movie:</label><input type="text" name="addmovie" value="" class="form-control" style="width:300px;"/></td>
    </tr>
    <tr>
      <td><label>Add Details:</label><input type="text" name="adddetails" value="" class="form-control" style="width:300px;"/></td>
      <tr>
      <td><label>Theatre name:</label><input type="text" name="theatrename" value=""  class="form-control" style="width:300px;"/></td>
    </tr>
    <td><label>Seat availability:</label><input type="text" name="seatavailability" value=""  class="form-control" style="width:300px;"/></td>
    </tr>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="OK"class="btn btn-primary" style="margin-top:5px;" style="width:300px;"/></td>
    </tr>
  </table>
        </form></center>
<?php
if(isset($_POST['submit']))
{
	$addmovie=$_POST['addmovie'];
	$adddetails=$_POST['adddetails'];
   $theatrename=$_POST['theatrename'];
   $seatavailability=$_POST['seatavailability'];

	$qry="INSERT INTO admin(addmovie,adddetails,theatrename,seatavailability)VALUES('$addmovie','$adddetails','$theatrename','$seatavailability')";
	mysqli_query($con,$qry);
	 
       ?>
             <script>
                                alert("success");
                                </script>               
          <?php
}
?>
       
</section> <!-- Admin Section End-->


</body>

</html>