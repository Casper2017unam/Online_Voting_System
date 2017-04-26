<?php include_once("conn.php");
include_once("functions.php");

    if (isset($_POST['signup'])) {
               $user = $_POST['student_id'];
			   $pass = $_POST['password'];
		
			   $sql = "INSERT into users (student_id, password) values ('$user','$pass')";
			   $qury = mysql_query($sql);
			   
			   
			   if(!$qury)
			   {
			         echo "<script>alert('user creation failed! check database');</script>" .mysql_error();
					
					 
			   }	 
			    else
					
			   {
					 echo "<script>alert('user successfully created a login');</script>";
			         
			   }
			   
	}  else if (isset($_POST['submit'])){
	
					$student_id =  mysql_real_escape_string($_POST["student_id"]);
					$password =  mysql_real_escape_string($_POST["password"]);
					
					if (empty($student_id) or empty($password)){
						
						echo "<script>alert('Please fill in the form!'); window.location=''</script>";
						
					}else{
						
				      $check_login = mysql_query("SELECT * from users WHERE student_id='$student_id' AND password='$password'");
					  
					  if(mysql_num_rows($check_login) == 1 ) {
						  
						$get = mysql_fetch_array($check_login);
						$my_student_id = $get['student_id'];
						
						
						$_SESSION['student_id'] = $my_student_id;
						
						echo "<script>alert('Welcome to the University of Namibia | School Council'); window.location='home.html'</script>";
						header('location: home.html');

					  } else {
						  
						  echo "<script>alert('password incorrect!'); window.location=''</script>";
					  }
						
					}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - School Council</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link href="css/default.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/style.css">
     
  </head>


<body>
  
   <header>
		<div class="main-menu">
	<div class="container">
	<div class="row">
				
	<div class="logo-container">
	<div class="logo">
	<img src="Council.jpg" alt="Council logo" rel="tooltip" 
	title="" data-placement="bottom" data-html="true" 
	data-original-title="">
	</div>
	</div>
				
	<div class="col-md-4">						
	<h1><a class="navbar-brand" href="" data-0="line-height:80px;"
	data-300="line-height:40px;">The University of Namibia</a></h1>   						
	</div>						
	<div class="col-md-8">
		<small>School Representative Council</small>				
	</div>	
				
	</div>				
	</div>
	</div>
	
	</header>
	
  	<div class="row mar-bot40">
	<div class="col-md-offset-3 col-md-6">
	<div class="sections-header">
			
	<h2></h2>
	<p></p>
	</div>
			
	
	
	</div>
	</div>		
	<div class="row mar-bot40">
		<div class="col-md-offset-3 col-md-6">
			<div class="sections-header">
			
				<h2></h2>
				<p></p>
			</div>
			

		</div>
	</div>		


<div class="container">
 
 <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please login<small> school representative council voting!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    			<div class="row">
							
							<form method="post">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    			<div class="form-group">
			    			<input type="student_id" name="student_id"  placeholder="Student Number"> <!--id="email" class="form-control input-sm"-->
			    			</div>
			    		    <div class="form-group">
			    			<input type="password" name="password"  placeholder="Password">
			    			<input type="password" name="password_confirmation"  placeholder="Confirm Password">
							<input type="submit" name="submit" value="Sign In">
							<a href="reg.php">Register</a>
							</div>
			    			</div>
							</form>
							
			    			</div>	
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
 
 
 
 
 
 <footer>
		<section id="footer" class="section footer">
			<div class="container">
				<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
					<div class="col-sm-12 align-center">
						<ul class="social-network social-circle">
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							</ul>				
					</div>
				</div>
				<div class="col-sm-12 text-center">
				   <p>Copyright &copy; 2017  The University Of Namibia, School Representative Council</p>
                </div>
			</div>
		</section>
		<a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>
	</footer>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	<script type="text/javascript">new WOW().init();</script>

</body>	  
	
</html>