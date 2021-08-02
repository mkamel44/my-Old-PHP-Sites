<?php

include("Subjects.php");

class SubjectsDbase
{

function addSubjects( $students )
{
		
		$quary = "insert into subjects (name,about)
		 values ('".$students->name."','".$students->about."')";
		 
		 mysql_query($quary);
		
}

function updateSubject( $students )
{
		
		$quary = "update subjects set name='".$students->name."',about='".$students->about."' where id=".$students->id;
		 
		 mysql_query($quary);
		
}



function getAllSubjects()
{
		
$products = array();
		
$query = "select * from subjects";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
for ($i=0; $i < $num_results; $i++)
{
			$product = new Subjects();
			
			$row = mysql_fetch_array($result);			
			
			$product->id = $row["id"];	
			
			$product->name = $row["name"];			
			
			$product->about = $row["about"];

			$products[$i] = $product;

}
		   
  return $products; 
}


function deleteSubject($id)
{

$quary = "delete from subjects where id=".$id;	
	
		 mysql_query($quary);

}


function getSubjectsCount()
{
$query = "select count(id) as lolo from subjects ORDER BY id desc";

$result = mysql_query($query);

$row = mysql_fetch_array($result);			

$count = $row["lolo"];	

return $count;

}

function getSubject($id)
{
		
$product = new Subjects();
		
$query = "select * from subjects where id=".$id;

$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

			$product->id = $row["id"];	

			$product->name = $row["name"];			

			$product->about = $row["about"];

		  return $product; 
}

}

?>