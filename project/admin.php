<?php 
  session_start();
?>

<html>
  <head>
   <title>ADMIN</title>
  </head>
  
   <body style="background-color:orange">
     <form method="POST" action="login2.php">
        <table>
                    <tr>
          <th>LOGIN AS  :</th> 
       

                  
         <td><input type="radio"name="login" id="staff" value="staff"><label>STAFF</label><td>
        

                 
       <td><input type="radio" name="login" id="student" value="student" ><label>STUDENT</label><td>
        </tr>

                


           <tr>
             <th>USER ID   :</th>
              <td><input type="number" name="userid"></td>
           </tr>
           <tr>
              <th>PASSWORD :</th>
              <td><input type="password" name="password">
           </tr>
           
              <tr>
                  <td><input type="submit" name="submit" value="LOGIN"></td>
             </tr>
              <tr>
              <footer>
                <td><a href="register.php">REGISTER</a></td>
              </footer>
            </tr>
        </table>
     </form>
   </body>
</html>




