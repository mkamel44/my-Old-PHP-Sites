<?php

include("Dawams.php");

class DawamDbase
{

function addDawam( $students )
{
		
		$quary = "insert into dawam (classes_rooms_id,subjects_name,from_time,to_time,day_name)
		 values (".$students->classes_rooms_id.",'".$students->subjects_name."','".$students->from_time."','".$students->to_time."','".$students->day_name."')";


		 mysql_query($quary);
		
}

function getAllDawams($classes_rooms_id,$day_name)
{
		
$products = array();
		
$query = "select * from dawam where classes_rooms_id=".$classes_rooms_id." and day_name='".$day_name."'";

$result = mysql_query($query);

				$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
			$product = new Dawams();
			
			$row = mysql_fetch_array($result);			
			
			$product->id = $row["id"];	
			
			$product->classes_rooms_id = $row["classes_rooms_id"];
			
			$product->subjects_name = $row["subjects_name"];
			
			$product->from_time = $row["from_time"];
			
			$product->to_time = $row["to_time"];						
			
			$product->day_name = $row["day_name"];
			
			$products[$i] = $product;

		}
		   
  return $products; 
}

function deleteDawam($id)
{

$quary = "delete from dawam where id=".$id;	


		 mysql_query($quary);

}


}

?>