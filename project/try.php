<?php
 session_start();
      $_SESSION['userid'];
?>

<html>
  <head>
    <title>RETURN BOOK</title>
  </head>

    <body style="background-color:orange">
     <form method="POST" >
      <fieldset>
       <table >
         <tr>
            <td>Enter Student User ID To Get It's Details:</td>
            <td><input type="number" name="user"></td>    
         </tr>



           <tr>
             <td><input type="submit" name="submit" value="GET DETAILS"></td>
              
           </tr>

       </table>
      </fieldset>
     </form>
    </body>
</html>
<?php
 if(isset($_POST['submit']))
{
  $user=$_POST['user'];

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="project";

  $connect=new mysqli($servername,$username,$password,$dbname);

    if($connect)
     {
        //echo "connected sucessfully with database";

        $query="SELECT * FROM task WHERE USER_ID='$user'";
        $firequery=$connect->query($query);
        $num=$firequery->num_rows;

           if($num>0)
              { ?>

             
                  <table border="1">
                    <tr>
                     <th>USER_ID</th>
                     <th>BOOK_ID</th>
                     <th>BOOK_NAME</th>
                     <th>AUTHOR</th>
                     <th>DATE</th>
                     <th>TIME</th> 
                      <th>RETURN_DATE</th>
                      <th>RETURN</th> 
                      <th>REISSUE</th>   
                    </tr>

                                <?php
 
                          while( $rows=$firequery->fetch_assoc()) 
                              {  ?>
                                
                                   <tr>
                                    <td><?php echo $rows['USER_ID'] ?></td>
                                    <td><?php echo $rows['BOOK_ID'] ?></td>
                                    <td><?php echo $rows['BOOK_NAME'] ?></td>
                                    <td><?php echo $rows['AUTHOR'] ?></td>
                                    <td><?php echo $rows['DATE'] ?></td>
                                    <td><?php echo $rows['TIME'] ?></td>
                                     <td><?php echo $rows['RETURN_DATE'] ?></td>
                                    
<td><a href="return.php?BOOK_ID=<?php echo 
$rows['BOOK_ID'] ?>"><input type="checkbox"></a></td> 

   <td><a href="reissue.php?BOOK_ID=<?php echo $rows['BOOK_ID'] ?>"><input type="checkbox"></a></td>
                                  </tr>
                                
                              <?php      
                                   }
                                ?> 
                    </table>
                
  <?php   
                             
          }
        else
          {
             echo"No Records found";
          }        
     }
    else
     {
       echo"Failed to connect with database";
     }
 include'footer.php';
}
?>


