<?php

$pagging_count = 15;

@mysql_connect("fdb27.runhosting.com","3533207_eco","xx4465978xx");

$dbi = mysql_select_db("3533207_eco");

if(!$dbi){
	echo mysqli_error($dbi);
	return;
}


?>