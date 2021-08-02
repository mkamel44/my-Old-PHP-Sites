<?php

include("Admin.php");

class AdminDbase
{
	function checkAdmin( $admin )
	{
				
		$quary = "select * from admin where admin_name='".$admin->admin_name."' and admin_pass='".$admin->admin_pass."' and admin_id=".$admin->admin_id;


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
	
	
	function updateAdmin( $admin )
	{
			
		$quary = "update admin set admin_name='".$admin->admin_name."' and admin_pass='".$admin->admin_pass."' where admin_id=".$admin->admin_id;

		mysql_query($quary);
			
	}
	

	

}

?>
