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
	
	
	function updateAdmin( $admin )
	{
			
		$quary = "update admin set name='".$admin->name."' , pass='".$admin->pass."' where id=".$admin->id;
		
		
		mysql_query($quary);
			
	}
	
		
	function  getAdmin($id)
	{

		$product = new Admin();

		$query   = "select * from admin where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->name = $row["name"];
		
		$product->pass = $row["pass"];

		return $product;
	}

}
?>
