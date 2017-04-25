<?php

  $conn = mysql_connect("localhost","root","") or die("mysql connection is failure."); //post method
  $db = mysql_select_db("council", $conn) or die("Database does not exists.");

?>