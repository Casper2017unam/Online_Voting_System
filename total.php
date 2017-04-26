<?php  include_once("conn.php") ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "",
 $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) 
  : $theValue;

  $theValue = function_exists("mysql_real_escape_string") 
  ? mysql_real_escape_string($theValue) : mysql_real_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" :
	  "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" :
	  "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue 
	  : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db("council", $conn);
$query_rs_vote = "SELECT * FROM poll";
$rs_vote = mysql_query($query_rs_vote, $conn) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

$resultQuestion1 = mysql_query("SELECT * FROM poll WHERE question='casper'");
$num_rowsQuestion1 = mysql_num_rows($resultQuestion1);

$resultQuestion2 = mysql_query("SELECT * FROM poll WHERE question='wise'");
$num_rowsQuestion2 = mysql_num_rows($resultQuestion2);

$resultQuestion3 = mysql_query("SELECT * FROM poll WHERE question='mbita'");
$num_rowsQuestion3 = mysql_num_rows($resultQuestion3);

$resultQuestion4 = mysql_query("SELECT * FROM poll WHERE question='matii'");
$num_rowsQuestion4 = mysql_num_rows($resultQuestion4);

$percentQuestion1 = ($num_rowsQuestion1 / $totalRows_rs_vote)*100;
$percentQuestion2 = ($num_rowsQuestion2 / $totalRows_rs_vote)*100;
$percentQuestion3 = ($num_rowsQuestion3 / $totalRows_rs_vote)*100;
$percentQuestion4 = ($num_rowsQuestion4 / $totalRows_rs_vote)*100;

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
	
	<ul>
			<li>
				<span class="total-votes"><?php echo $num_rowsQuestion1 ?></span> Joshua
				<br />
				<div class="results-bar" style="width: <?php echo round($percentQuestion1,2); ?>%;">
					 <?php echo round($percentQuestion1,2); ?>%
				</div>
			</li>
			
			<li>
				<span class="total-votes"><?php echo $num_rowsQuestion2 ?></span> Patterson
				<div class="results-bar" style="width: <?php echo round($percentQuestion2,2); ?>%;">
					 <?php echo round($percentQuestion2,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php echo $num_rowsQuestion3 ?></span> Roman
				<div class="results-bar" style="width: <?php echo round($percentQuestion3,2); ?>%;">
					 <?php echo round($percentQuestion3,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php echo $num_rowsQuestion4 ?></span> Cindy
				<div class="results-bar" style="width: <?php echo round($percentQuestion4,2); ?>%;">
					 <?php echo round($percentQuestion4,2); ?>%
				</div>
			</li>
		
		</ul>
	
		<h6>Total votes: <?php echo $totalRows_rs_vote ?></h6>
		
		<a href="Ballot.php">back to voting</a>

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