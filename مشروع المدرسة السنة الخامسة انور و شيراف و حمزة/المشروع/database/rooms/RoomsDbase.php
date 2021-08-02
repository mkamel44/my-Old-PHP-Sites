<?php

include("Rooms.php");

class RoomsDbase
{

function addRoom( $room )
{
		
		$quary = "insert into rooms 	(name)
		 values ('".$room->name."')";
		 
		 mysql_query($quary);
		
}

function updateRoom( $room )
{
		
		$quary = "update rooms set name='".$room->name."' where id=".$room->id;

		 mysql_query($quary);
		
}



function getRoom($id)
{
		
$product = new Rooms();
		
$query = "select * from rooms where id=".$id;

$result = mysql_query($query);

$row = mysql_fetch_array($result);			

$product->id = $row["id"];	

$product->name = $row["name"];			

return $product; 
}


function getAllRoom()
{
		
$products = array();
	
$query = "select * from rooms ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
for ($i=0; $i < $num_results; $i++)
{
			$product = new Rooms();
			
			$row = mysql_fetch_array($result);	
					
			$product->id = $row["id"];	
			
			$product->name = $row["name"];			

			$products[$i] = $product;

}
		   
  return $products; 
}



}

?>