<?php

include("Sbject_Teacher_Classes_Rooms.php");

class Sbject_Teacher_Classes_RoomsDbase
{

function addSbject_Teacher_Classes_Rooms( $students )
{
		
		$quary = "insert into sbject_teacher_classes_rooms (classes_rooms_id,subjects_id,teachars_id)
		 values (".$students->classes_rooms_id.",".$students->subjects_id.",".$students->teachars_id.")";

		 mysql_query($quary);
		
}

function updateSbject_Teacher_Classes_Rooms( $students )
{
		
		$quary = "update sbject_teacher_classes_rooms set classes_rooms_id=".$students->classes_rooms_id.",subjects_id=".$students->subjects_id.",teachars_id=".$students->teachars_id." where id=".$students->id;
		 mysql_query($quary);
		
}


function deleteSbject_Teacher_Classes_Rooms($id)
{

	$quary = "delete from sbject_teacher_classes_rooms where id=".$id;		
	
	mysql_query($quary);

}

function getAllSbject_Teacher_Classes_Rooms()
{
		
$products = array();
	
$query = "select * from sbject_teacher_classes_rooms ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Sbject_Teacher_Classes_Rooms();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->classes_rooms_id = $row["classes_rooms_id"];			
				
					$product->subjects_id = $row["subjects_id"];
					
					$product->teachars_id = $row["teachars_id"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}

function getAllSbject_Teacher_Classes_RoomsByTeachar($teacher_id)
{
		
$products = array();
	
$query = "select * from sbject_teacher_classes_rooms where teachars_id=".$teacher_id." ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Sbject_Teacher_Classes_Rooms();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->classes_rooms_id = $row["classes_rooms_id"];			
				
					$product->subjects_id = $row["subjects_id"];
					
					$product->teachars_id = $row["teachars_id"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}


function getSbject_Teacher_Classes_Rooms($id)
{
		
	$product = new Sbject_Teacher_Classes_Rooms();
			
	$query = "select * from sbject_teacher_classes_rooms where id=".$id;
	
	$result = mysql_query($query);
	
	$row = mysql_fetch_array($result);			
	
	$product->id = $row["id"];	
			
	$product->classes_rooms_id = $row["classes_rooms_id"];			
					
	$product->subjects_id = $row["subjects_id"];
						
	$product->teachars_id = $row["teachars_id"];
	
	return $product; 
	
}


}

?>