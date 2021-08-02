<?php

include("Exams.php");

class ExamDbase
{

function addExam( $students )
{
		
		$quary = "insert into exam (class_id,subjects_name,date_of_exam)
		 values (".$students->class_id.",'".$students->subjects_name."','".$students->date_of_exam."')";


		 mysql_query($quary);
		
}

function getAllExams($class_id)
{
		
$products = array();
		
$query = "select * from exam where class_id=".$class_id;

$result = mysql_query($query);

				$num_results = mysql_num_rows($result);
		
		for ($i=0; $i < $num_results; $i++)
		{
			$product = new Exams();
			
			$row = mysql_fetch_array($result);			
			
			$product->id = $row["id"];	
			
			$product->class_id = $row["class_id"];
			
			$product->subjects_name = $row["subjects_name"];
			
			$product->date_of_exam = $row["date_of_exam"];
						
			$products[$i] = $product;

		}
		   
  return $products; 
}

function deleteExam($id)
{

$quary = "delete from exam where id=".$id;	


		 mysql_query($quary);

}


}

?>