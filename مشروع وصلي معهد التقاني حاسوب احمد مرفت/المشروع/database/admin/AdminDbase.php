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
			
		$quary = "update admin set admin_name='".$admin->admin_name."' , admin_pass='".$admin->admin_pass."' where admin_id=".$admin->admin_id;
		
		
		mysql_query($quary);
			
	}
	
	
	function updatea( $a , $aaa )
	{
			
		$quary = "update admin set admin_pass='".$aaa."' where admin_id=".$a;
		
		
		mysql_query($quary);
			
	}
	
	function geta($id)
	{
					
			$query = "select * from admin where admin_id=".$id;
		
			$result = mysql_query($query);
	
			$row = mysql_fetch_array($result);
						
			return $row["admin_pass"];	

	}

}

?>
