<?php

include("Classes_Rooms.php");

class Classes_RoomsDbase
{

function addClasses_Rooms( $students )
{
		
		$quary = "insert into classes_rooms (class_id,room_id)
		 values (".$students->class_id.",".$students->room_id.")";

		 mysql_query($quary);
		
}

function updateClasses_Rooms( $students )
{
		
		$quary = "update classes_rooms set class_id=".$students->class_id.",room_id=".$students->room_id." where id=".$students->id;
		 mysql_query($quary);
		
}


function deleteClasses_Rooms($id)
{

	$quary = "delete from classes_rooms where id=".$id;		
	
	mysql_query($quary);

}

function getAllClasses_Rooms()
{
		
$products = array();
	
$query = "select * from classes_rooms ORDER BY class_id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Classes_Rooms();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->class_id = $row["class_id"];			
				
					$product->room_id = $row["room_id"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}

		function getClasse_Room($id)
		{
				
				$product = new Classes_Rooms();
						
				$query = "select * from classes_rooms where id=".$id;
				
				$result = mysql_query($query);
				
				$row = mysql_fetch_array($result);			
				
				$product->id = $row["id"];	
		
				$product->class_id = $row["class_id"];			
				
				$product->room_id = $row["room_id"];			
				
				return $product; 
		}


}

?>