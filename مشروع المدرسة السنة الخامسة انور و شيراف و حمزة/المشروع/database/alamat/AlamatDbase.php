<?php

include("Alamat.php");

class AlamatDbase
{

function addAlamat( $students )
{
		
		$quary = "insert into alamat (teacher_id,student_id,sbject_teacher_classes_rooms_id,mark,about)
		 values (".$students->teacher_id.",".$students->student_id.",".$students->sbject_teacher_classes_rooms_id.",".$students->mark.",'".$students->about."')";


		 mysql_query($quary);
		
}

function updateAlamat( $students )
{
		
		$quary = "update classes set student_id=".$students->student_id.",teacher_id=".$students->teacher_id.",sbject_teacher_classes_rooms_id=".$students->sbject_teacher_classes_rooms_id.",mark=".$students->mark.",about='".$students->about."' where id=".$students->id;

		 mysql_query($quary);
		
}

function deleteAlamat($id)
{

$quary = "delete from alamat where id=".$id;	


		 mysql_query($quary);

}

function getAllAlamatByTeacher($teacher_id,$sbject_teacher_classes_rooms_id)
{
		
$products = array();
	
$query = "select * from alamat where teacher_id=".$teacher_id." and sbject_teacher_classes_rooms_id=".$sbject_teacher_classes_rooms_id." ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Alamat();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->student_id = $row["student_id"];			
				
					$product->teacher_id = $row["teacher_id"];
					
					$product->sbject_teacher_classes_rooms_id = $row["sbject_teacher_classes_rooms_id"];
					
					$product->mark = $row["mark"];
					
					$product->about = $row["about"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}

function getAllAlamatByTeacher2($teacher_id,$sbject_teacher_classes_rooms_id,$student_id)
{
		
$products = array();
	
$query = "select * from alamat where teacher_id=".$teacher_id." and sbject_teacher_classes_rooms_id=".$sbject_teacher_classes_rooms_id." and student_id=".$student_id." ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Alamat();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->student_id = $row["student_id"];			
				
					$product->teacher_id = $row["teacher_id"];
					
					$product->sbject_teacher_classes_rooms_id = $row["sbject_teacher_classes_rooms_id"];
					
					$product->mark = $row["mark"];
					
					$product->about = $row["about"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}


function getAllAlamatByStudent($student_id)
{
		
$products = array();
	
$query = "select * from alamat where student_id=".$student_id." ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
					$product = new Alamat();
					
					$row = mysql_fetch_array($result);	
							
					$product->id = $row["id"];	
		
					$product->student_id = $row["student_id"];			
				
					$product->teacher_id = $row["teacher_id"];
					
					$product->sbject_teacher_classes_rooms_id = $row["sbject_teacher_classes_rooms_id"];
					
					$product->mark = $row["mark"];
					
					$product->about = $row["about"];			
		
					$products[$i] = $product;
		
		}
		   
  return $products; 
}


}

?>