<?php

include("Admin.php");

class AdminDbase
{
	function checkAdmin( $admin )
	{
				
		$quary = "select * from admin where name='".$admin->name."' and pass='".$admin->pass."' and id=".$admin->id;

		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);
		
		if($num_results  == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}
	
	function updateAdmin( $students )
	{
			
		$quary = "update admin set name='".$students->name."',pass='".$students->pass."' where id=".$students->id;
	
		mysql_query($quary);
			
	}


}

?>