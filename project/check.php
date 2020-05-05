<?php
session_start();
          $_SESSION['userid'];
 if(isset($_POST['submit']))
  {
    /*echo*/ $userid=$_POST['userid'];
    /*echo*/ $password1=$_POST['password1'];
    /*echo*/ $password2=$_POST['password2'];       
    /*echo*/ $account=$_POST['login'];
      if($password1==$password2)
         {
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="project";
		$password1=md5($password1);      

      $connect=new mysqli($servername,$username,$password,$dbname);
                if($connect)
                    {
                     
                      //echo"connected";
 $query="INSERT INTO login(USER,PASSWORD,ACCOUNT) values('$userid','$password1','$account')";
                       $firequery=$connect->query($query);
                            if($firequery)   
                                 {
                                     echo"REGISTRATION DONE SUCESSFULLY";  
                                  }
                              else
                                   {
                                       echo"FAILED TO REGISTER";
                                  }                  

                    }








          }
   }
?>
