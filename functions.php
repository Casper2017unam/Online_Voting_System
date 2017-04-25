<?php

session_start();

function loggedin(){
	
if(isset($_SESSION['student_id']) && !empty($_SESSION['student_id'])){
return true;
}else{
	
	return false;
}


}

?>