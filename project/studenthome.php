<?php
 session_start();
  //$account=$_POST['login'];
            //  $userid=$_POST['userid']; 
        $userid=$_SESSION['userid'];
      echo $userid
// echo  $_SESSION['account']=$account;
?>
        <html>
  <head>
    <title>HOME</title>
  </head>

    <body style="background-color:orange">
        <h2>Welcome To Library</h2>
           <h3>Select Task :</h3>
         <ul>
         
          <li><a href="details1.php">DETAILS OF ISSUED BOOK</a></li>
          <li><a href="sreissue.php">REISSUE BOOK</a></li>
         </ul>
        <footer>
  <center><a href="logout.php"><input type="submit" name="submit" value="LOGOUT" ></a><center>
	<footer>

    </body>
</html>


