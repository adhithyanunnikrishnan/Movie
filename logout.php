<?php
session_start();

			
if(isset($_SESSION['login_id']))
  unset($_SESSION['login_id']);
  

  //$_SESSION['pid'];
// $_SESSION['ld'];

?>
<script type="text/javascript">
window.location="index.php";
</script>