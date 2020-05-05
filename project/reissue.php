<?php
 session_start();
          $_SESSION['userid'];
 
  $idu=$_GET ['BOOK_ID'];
 // echo $idu;
    
   $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";

   $connect=new mysqli($servername,$username,$password,$dbname);

     if($connect)
        {
           //echo"connected sucessfully";
        
              $query="SELECT * FROM task WHERE BOOK_ID='$idu'";
              $firequery=$connect->query($query);
              $rows=$firequery->fetch_assoc();

                if($rows)
                     { ?>
                         <html>
   <head>
    <title>ISSUE BOOK</title>
  </head>

    <body style="background-color:orange">
     <form method="POST">
      <fieldset>
       <table >
         <tr>
            <td>Enter Book ID :</td>
            <td><input type="number" name="bookid" value="<?php echo $rows['BOOK_ID']; ?>"></td>    
         </tr>

          <tr>
            <td>Enter Book Name :</td>
            <td><input type="text" name="bookname"value="<?php echo $rows['BOOK_NAME']; ?>"></td>   
          </tr>

           <tr>
 	     <td>Enter Author Name :</td>
	     <td><input type="text" name="authorname" value="<?php echo $rows['AUTHOR']; ?>"></td>		
           </tr>



           <tr>
             <td><input type="submit" name="submit" value="ISSUE"></td>
              
           </tr>

       </table>
      </fieldset>
     </form>
    </body> 
</html>
          <?php      

               if(isset($_POST['submit']))
                  {
                      $bookid=$_POST['bookid'];
                      $bookname=$_POST['bookname'];
                      $bookauthor=$_POST['authorname'];
                      //$datee=$_POST['datee'];
  
   //connection to the database

     $servername="localhost";
     $username="root";
     $password="";
     $dbname="project";  

    $connect=new mysqli($servername,$username,$password,$dbname);

                if($connect)
                  {

        $query="UPDATE task SET BOOK_ID='$bookid',BOOK_NAME='$bookname',AUTHOR='$bookauthor'"; 

            $firequery=$connect->query($query);
                if($firequery)
                 {
                    echo"book issued sucessfully";
                 }
                else

                 {
                    echo"Failed to issue book";
                 }
                   }
                  else
                    {
                      echo"Failed to connect with database";
                    }






                   }
              


               







                    }
                 else
                      {
                        echo"Failed to fire query";
                       }
        }
      else
        {
            echo"Failed to connect"; 
        }
 include'footer.php';
?>



