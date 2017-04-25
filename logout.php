<?php include_once("conn.php")  


<?php

session_start(); #starts session

session_unset(); #removes all the variables in the session

session_destroy();


if($_SESSION['sTudent_id'])
	
   echo "Logged out Successfully!<br/>";
   else
   echo "error occurred!!<br/>";

?>