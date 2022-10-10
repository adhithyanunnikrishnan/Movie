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

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">mmm</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">llllll</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="index.php">Home</a></li>
            <li><a class="smoothscroll" href="login.php">
             </a></li>
	         <li><a class="smoothscroll" href="register.php">Register</a></li>
            <li><a class="smoothscroll" href="staff.php">Staff</a></li>
            <li><a class="smoothscroll" href="admin.php">Admin</a></li>
           
        
        <center><h2>DETAILS</h2></center>             
   <center>
        <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
  
    <tr>
      <td><label>Theatre name:</label><input type="text" name="theatrename" value=""  class="form-control" style="width:300px;"/></td>
    </tr>
    <td><label>Seat availability:</label><input type="text" name="seatavailability" value=""  class="form-control" style="width:300px;"/></td>
    </tr>

      <td><input type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-top:5px;" style="width:500px;"/></td>
    </tr>
  </table>
        </form></center>
<?php
if(isset ($_POST['submit']))
{
	
	$theatrename=$_POST['theatrename'];
   $seatavailability=$_POST['seatavailability'];

                  $qry="INSERT INTO staff(theatrename,seatavailability) VALUES ('$theatrename',$seatavailability,)";
	mysqli_query($con,$qry);
?>
                            <script>
                                alert("success");
                                </script>
          <?php
}
?>
</body>

</html>