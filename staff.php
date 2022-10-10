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
            <li class="current"><a class="smoothscroll" href="index.php">Home</a></li>
            
            <li><a class="smoothscroll" href="staff.php">Staff</a></li>
           
            <li><a class="smoothscroll" href="details.php">Details</a></li>
           
        
<div class="nine columns main-col">
<center><h2>STAFF</h2></center>             
   <center>
        <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
     
    <tr>
      <td><label>Staff id:</label><input type="text" name="staffid"  class="form-control"  style="width:300px;"s/></td>
    </tr>
    <tr>
      <td><label>password:</label><input type="text" name="password" value="" class="form-control" style="width:300px;" /></td>
    </tr>
    <tr>
      
      <td><input type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-top:5px;" style="width:500px;"/></td>
    </tr>
  </table>
        </form></center>
<?php
if(isset ($_POST['submit']))
{
	
	$adddetails=$_POST['adddetails'];	
	$password=$_POST['password'];
	$staffid=$_POST['staffid'];
	$theatrename=$_POST['theatrename'];
                  $qry="INSERT INTO staff(staffid, password,theatrename,adddetails) VALUES ('$staffid','$password','$theatrename','$adddetails')";
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