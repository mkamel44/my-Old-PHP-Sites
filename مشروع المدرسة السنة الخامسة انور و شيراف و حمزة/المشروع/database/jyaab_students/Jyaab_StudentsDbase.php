<?php

include("Jyaab_Students.php");

class Jyaab_StudentsDbase
{

	function addJyaab( $students )
	{
			
			$quary = "insert into jyaab_students (student_id,classes_rooms_id,date_of_hodor,jyaab_hodor)
			 values (".$students->student_id.",".$students->classes_rooms_id.",'".$students->date_of_hodor."','".$students->jyaab_hodor."')";
			
	
			 mysql_query($quary);
			
	}


	function deleteJyaab($id)
	{
		$quary = "delete from jyaab_students where id=".$id;		
		
		mysql_query($quary);
	}
	



	function getAllStudentsJyaab( $classes_rooms_id ,  $date_of_hodor  )
	{
			
			$products = array();
					
			$query = "select * from jyaab_students where classes_rooms_id=".$classes_rooms_id." and date_of_hodor='". $date_of_hodor."'";

			$result = mysql_query($query);
			
			$num_results = mysql_num_rows($result);
					
			for ($i = 0; $i < $num_results ; $i++)
			{
				$std = new Jyaab_Students();
			
				$row = mysql_fetch_array($result);			
			
				$std->id = $row["id"];
				
				$std->student_id = $row["student_id"];
							
				$std->classes_rooms_id = $row["classes_rooms_id"];
										
				$std->date_of_hodor = $row["date_of_hodor"];
				
				$std->jyaab_hodor = $row["jyaab_hodor"];
				
				$products[$i] = $std;
			
			}
				   
		  return $products; 
	}



}

?>