<?php
 session_start();
 //echo $_SESSION['account'];
        // $userid=$_POST['userid']; 
 $_SESSION['userid'];
?>
<html>
  <head>
    <title>DETAILS</title>
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

               <fieldset>
                  <table border="1">
                    <tr>
                      <th>USER_ID</th> 
                     <th>BOOK_ID</th>
                     <th>BOOK_NAME</th>
                     <th>AUTHOR</th>
                     <th>DATE</th>
                     <th>TIME</th> 
                      <th>RETURN_DATE</th>    
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
                                   </tr>
                               
                              <?php      
                                   }
                                ?> 
                    </table>
                </fieldset>
                
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




 

