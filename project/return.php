<?php
session_start();
          $_SESSION['userid'];
  $idf=$_GET ['BOOK_ID'];
  //echo $idf;

   $servername="localhost";
   $username="root";
   $password="";
   $dbname="project";

    $connect=new mysqli($servername,$username,$password,$dbname);

      if($connect)
       {
         $query="DELETE FROM task WHERE BOOK_ID=$idf";
         $firequery=$connect->query($query);

             if($firequery)
              {
                 echo"Book returned sucessfully";
              }
             else
               {
                 echo"Failed to return book";
               }
       }
      else
       {
         echo"Failed to connect with database";
       }
?>
<html>
  <footer>
   <ul>
    <li><a href="staffhome.php">  BACK TO HOME  </a></li>
    <li><a href="try.php">  RETURN OR REISSUE ANOTHER BOOK</a></li>
   <ul>  
  </footer>
</html>


