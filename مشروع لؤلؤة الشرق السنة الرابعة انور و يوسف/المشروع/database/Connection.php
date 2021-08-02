<?php

	$mysqli =	mysql_connect("sql304.epizy.com","epiz_23644346","uu4465978uu");
		
	mysql_select_db("epiz_23644346_peareast");

	if ($mysqli->connect_errno) 
	{
	   echo  $mysqli->connect_error;
	   exit();
	}
		

?>
