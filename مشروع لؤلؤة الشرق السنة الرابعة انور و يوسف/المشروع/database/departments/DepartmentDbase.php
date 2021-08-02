<?php

include("Departments.php");

class DepartmentDbase
{

function updatea( $depa )
	{
			
		$quary = "update department set department='".$depa->department."',price=".$depa->price.",information='".$depa->information."' where id=".$depa->id;
		
		
		mysql_query($quary);
			
	}
	
	function  geta($id)
	{
			
		$product = new Departments();
				
		$query = "select * from department where id=".$id;

		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		
		$product->id = $row["id"];			
		
		$product->department = $row["department"];	

		$product->price = $row["price"];	
		
		$product->information = $row["information"];	

		return $product; 
	}
  
}

?>
