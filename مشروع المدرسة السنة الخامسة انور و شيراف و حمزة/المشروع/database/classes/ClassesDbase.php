<?php

include("Classes.php");

class ClassesDbase
{

function addClass( $students )
{
		
		$quary = "insert into classes 	(name)
		 values ('".$students->name."')";
		 
		 mysql_query($quary);
		
}

function updateClass( $students )
{
		
		$quary = "update classes set name='".$students->name."' where id=".$students->id;

		 mysql_query($quary);
		
}



function getClass($id)
{
		
$product = new Classes();
		
$query = "select * from classes where id=".$id;

$result = mysql_query($query);

$row = mysql_fetch_array($result);			

$product->id = $row["id"];	

$product->name = $row["name"];			

return $product; 
}


function getAllClasses()
{
		
$products = array();
		
$query = "select * from classes ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
for ($i=0; $i < $num_results; $i++)
{
			$product = new Classes();
			
			$row = mysql_fetch_array($result);	
					
			$product->id = $row["id"];	
			
			$product->name = $row["name"];			

			$products[$i] = $product;

}
		   
  return $products; 
}


}

?>