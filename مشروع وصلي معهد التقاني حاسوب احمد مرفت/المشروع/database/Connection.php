<?php


	
	$mysqli =	mysql_connect("sql113.epizy.com","epiz_23507171","k4465978k");
	
		
		mysql_select_db("epiz_23507171_waslee");

if ($mysqli->connect_errno) {

   echo  $mysqli->connect_error;
    exit();
	}
	

?>
