<?php include_once("conn.php"); ?>
<?php

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString
($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 

{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue)
  : $theValue;

  $theValue = function_exists("mysql_real_escape_string")
  ? mysql_real_escape_string($theValue)
  : mysql_real_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" 
	  : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue 
	  : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO poll (id, question) VALUES (%s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['Poll'], "text"));

  mysql_select_db("council", $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());

  $insertGoTo = "total.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_rs_vote = "-1";
if (isset($_GET['recordID'])) {
  $colname_rs_vote = $_GET['recordID'];
}
mysql_select_db("council", $conn);
$query_rs_vote = sprintf("SELECT * FROM poll WHERE id = %s",
 GetSQLValueString($colname_rs_vote, "int"));
$rs_vote = mysql_query($query_rs_vote, $conn) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poll! | School Representative Council</title>

	 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link href="css/default.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/animate.css" />	
	<link rel="stylesheet" href="css/style.css">
    
  </head>


<div class="body-poll">
  
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
	<h1><a class="navbar-brand" data-0="line-height:80px;"
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
			
			            <div>
							<ul class="nav nav-pills">
					           <li><a href="home.html">Home</a></li>
                               <li><a href="profile.html">Profiles</a></li>
							   <li><a href="Ballot.php">Poll!</a></li>
                               <li><a href="aboutUs.html">About Us</a></li>
							</ul>
						</div>
		</div>
	</div>	

	
	<div class="fieldset-poll">

	<div class="legend-poll">Who's your favourite candidate for SRC Culture?</div>
	
	<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
    
    <label>
    	<input type="radio" name="Poll" value="joshua" id="Poll_0" />
     	Joshua
     </label>
     
    <label>
    	<input type="radio" name="Poll" value="patterson" id="Poll_1" />
      	Patterson
    </label>
    
    <label>
    	<input type="radio" name="Poll" value="roman" id="Poll_2" />
		Roman
	</label>
	
    <label>
    	<input type="radio" name="Poll" value="cindy" id="Poll_3" />
		Cindy
	</label>


    <input type="submit" name="submit" id="submit" value="Vote" />
    
	<input type="hidden" name="id" value="form1" />
	
	<input type="hidden" name="MM_insert" value="form1" />
</form>

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
	
</div>
</html>

<?php
mysql_free_result($rs_vote);
?>