<?php


	
	$mysqli =	mysql_connect("sql309.epizy.com","epiz_22865098","0XRAPWZOcP1Aeh");
	
		
		mysql_select_db("epiz_22865098_abilinew");

if ($mysqli->connect_errno) {

   echo  $mysqli->connect_error;
    exit();
	}
	

?>
