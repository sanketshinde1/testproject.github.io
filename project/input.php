<?php
 session_start();
 //echo $_SESSION['account'];
        // $userid=$_POST['userid']; 
          $_SESSION['userid'];
?>

<html>
  <head>
    <title>ISSUE BOOK</title>
  </head>

    <body style="background-color:orange">
     <form method="POST" action="insert.php">
      <fieldset>
       <table >
         <tr>
            <td>Enter Student User ID :</td>
            <td><input type="number" name="user"></td>    
         </tr>

         <tr>
            <td>Enter Book ID :</td>
            <td><input type="number" name="bookid"></td>    
         </tr>

          <tr>
            <td>Enter Book Name :</td>
            <td><input type="text" name="bookname"></td>   
          </tr>

           <tr>
 	     <td>Enter Author Name :</td>
	     <td><input type="text" name="authorname"></td>		
           </tr>

           <tr>
 	     <td>Date :</td>
	     <td><input type="date" name="datee"></td>		
           </tr>

           <tr>
             <td><input type="submit" name="submit" value="ISSUE"></td>
              
           </tr>

       </table>
      </fieldset>
     </form>
    </body> 
</html>

<?php include'footer.php'; ?>
