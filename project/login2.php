 <?php
  session_start();

 if(isset($_POST['submit']))
 { 
	 $account=$_POST['login'];
         $userid=$_POST['userid']; 
         $_SESSION['userid']=$userid;
       	$_SESSION['account']=$account;

  

     $userid=$_POST['userid'];
    $password=$_POST['password'];      
    $account=$_POST['login'];
              $password1=md5($password);

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="project";
      
      $connect=new mysqli($servername,$username,$password,$dbname); 

             if($connect)
                  {
                      
       $query="SELECT * FROM login WHERE USER=$userid";               
       $firequery=$connect->query($query);
       $rows=$firequery->num_rows;
                     

			      $result=mysqli_fetch_array($firequery);
                            $u=$result['USER'];
			     $p=$result['PASSWORD'];
				 $a=$result['ACCOUNT'];
                             //  echo $p1=md5($p);

 if($result['USER']==$userid && $result['ACCOUNT']==$account && $password1==$p )
			{
			   if($account=='staff')
 				{
				   header("location:staffhome.php");	
				}
			    else	
				{
				    header("location:studenthome.php");
				}	
	
			 }
			else
			      {
			echo"Unable to login please enter valid inputs";
				}

                  }

 }
?> 
