<?php
 session_start();
 $_SESSION['userid'];
 //echo $_SESSION['account'];
 if(isset($_POST['submit']))
  {
   $user=$_POST['user'];
   $bookid=$_POST['bookid'];
   $bookname=$_POST['bookname'];
   $bookauthor=$_POST['authorname'];
   $datee=$_POST['datee'];
  
   //connection to the database

     $servername="localhost";
     $username="root";
     $password="";
     $dbname="project";  

    $connect=new mysqli($servername,$username,$password,$dbname);

         if($connect)
          {
            $query="INSERT INTO task(USER_ID,BOOK_ID,BOOK_NAME,AUTHOR,DATE,TIME,RETURN_DATE) values('$user','$bookid','$bookname','$bookauthor',now(),now(),date_add(now(),INTERVAL 7 DAY))";


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
 else
  {
   echo"Error"; 
  }
 include'footer.php';
?>




