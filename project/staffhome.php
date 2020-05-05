 <?php
 session_start();
 // $account=$_POST['login'];
              // $userid=$_POST['userid']; 
        $_SESSION['userid'];
 // $_SESSION['account']=$account;
?>    



      <html>
              <head>
                <title>HOME</title>
              </head>

               <body style="background-color:orange">
                   <h2>Welcome To Library</h2>
                   <h3>Select Task :</h3>
                   <ul>
                    <li><a href="input.php ">ISSUE BOOK</a></li>
                   <li><a href="details.php">DETAILS OF ISSUED BOOK</a></li>
               
                 <li><a href="try.php">RETURN OR REISSUE BOOK</a></li>
                 </ul>
  <center><a href="logout.php"><input type="submit" name="submit" value="LOGOUT" ></a><center>
                </body>
              </html>
