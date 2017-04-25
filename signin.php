<?php include_once("conn.php")  ?>
<?php
  session_start();

  $uname = $_POST['student_id'];
  $password = $_POST['password'];
  
  
  $sql = "SELECT count(*) FROM users WHERE ( 
  student_id='".$uname."' and password='".$password."')";
  
  $qury = mysql_query($sql);
  
  $result = mysql_fetch_array($sql);
  
  
  if($result [0] > 0)
  {
	  
	echo "Login Successful!";
	$_SESSION ['sTudent_id'] =  $uname;
	echo "<script>alert('Welcome to UNAM | School Representative Council');</script>";.$_SESSION ['sTudent_id']. "!";
    echo "<script>alert('<a href='reg.php'>Register</a>');</script>";	
	echo "<script>alert('<a href='log.php'>Login</a>');</script>";
    echo "<script>alert('<a href='logout.php'>LogOut</a>');</script>";
	
  }

  else
					
	{
		
	echo "Access Not Granded";
    echo "<script>alert('<a href='reg.php'>Register</a>');</script>";	
	echo "<script>alert('<a href='log.php'>Login</a>');</script>";
	
	}
?>