<?php
session_start(); 
?>

<html>
 <head>
  <title>REGISTER</title>
 </head>

 <body>
  <form method="POST" action="check.php">
    <table>
 <tr>
          <th>REGISTER AS :</th> 
       

                  
         <td><input type="radio"name="login" id="staff" value="staff"><label>STAFF</label><td>
        

                 
       <td><input type="radio" name="login" id="student" value="student" ><label>STUDENT</label><td>
        </tr>
           <tr>
             <th>USER ID :</th>
              <td><input type="number" name="userid"></td>
           </tr>
           <tr>
              <th>ENTER PASSWORD :</th>
              <td><input type="password" name="password1">
           </tr>

              <th>CONFIRM PASSWORD :</th>
              <td><input type="password" name="password2">
           </tr>
           
              <tr>
                  <td><input type="submit"name="submit" value="REGISTER"></td>
             </tr>
    </table>
  </form>
 </body>
</html>
