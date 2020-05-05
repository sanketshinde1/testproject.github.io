<?php
 session_start();
  if(isset($_POST['submit']))
    { //echo $_SESSION['account'];
           if(	$_SESSION['account']=='staff')
      {
       header('location:staffhome.php');
      }
    else
      {
         header('location:studenthome.php');
       } 
    }
?>
