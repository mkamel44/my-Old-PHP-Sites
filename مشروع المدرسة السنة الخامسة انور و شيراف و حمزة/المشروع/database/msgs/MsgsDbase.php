<?php

include("Msgs.php");

class MsgsDbase
{

function addMsgs( $students )
{
		
		$quary = "insert into msgs 	(student_id,teacher_id,msg_title,msg,msg_datetime,msg_shown)
		 values (".$students->student_id.",".$students->teacher_id.",'".$students->msg_title."','".$students->msg."','".$students->msg_datetime."','".$students->msg_shown."')";
		 
		 mysql_query($quary);
		
}

function updateMsgs( $students )
{
		
		$quary = "update msgs set student_id=".$students->student_id.",teacher_id=".$students->teacher_id.",msg_title='".$students->msg_title."',msg='".$students->msg."',msg_datetime='".$students->msg_datetime."',msg_shown='".$students->msg_shown."' where id=".$students->id;

		 mysql_query($quary);
		
}


function updateMsgsShown( $msg_id )
{
		
		$quary = "update msgs set msg_shown='true' where id=".$msg_id;

		 mysql_query($quary);
		
}




function getAllMsgsFromTeacher($teacher_id)
{
		
	$products = array();
			
	$query = "select * from msgs where teacher_id=".$teacher_id." ORDER BY msg_datetime desc";
	
	$result = mysql_query($query);
	
	$num_results = mysql_num_rows($result);
			
	for ($i=0; $i < $num_results; $i++)
	{
				$product = new Msgs();
				$row = mysql_fetch_array($result);			
				$product->id = $row["id"];	
				$product->student_id = $row["student_id"];			
				$product->teacher_id = $row["teacher_id"];
				$product->msg_title = $row["msg_title"];			
				$product->msg = $row["msg"];
				$product->msg_datetime = $row["msg_datetime"];
				$product->msg_shown = $row["msg_shown"];		
				
				$products[$i] = $product;
	
	}
		   
  return $products; 
}

function getAllMsgsToStudent($student_id)
{
		
	$products = array();
			
	$query = "select * from msgs where student_id=".$student_id." ORDER BY msg_datetime desc";
	
	$result = mysql_query($query);
	
	$num_results = mysql_num_rows($result);
			
	for ($i=0; $i < $num_results; $i++)
	{
				$product = new Msgs();
				$row = mysql_fetch_array($result);			
				$product->id = $row["id"];	
				$product->student_id = $row["student_id"];			
				$product->teacher_id = $row["teacher_id"];
				$product->msg_title = $row["msg_title"];			
				$product->msg = $row["msg"];
				$product->msg_datetime = $row["msg_datetime"];
				$product->msg_shown = $row["msg_shown"];		
				
				$products[$i] = $product;
	
	}
		   
  return $products; 
}



function getAllMsgsFromTeacherCount($teacher_id)
{
	$query = "select count(id) as Students_count from msgs where teacher_id=".$teacher_id;
	
	$result = mysql_query($query);
	
	$row = mysql_fetch_array($result);			
	
	$count = $row["Students_count"];	
	
	return $count;

}

function getAllMsgsToStudentCount($student_id)
{
	$query = "select count(id) as Students_count from msgs where student_id=".$student_id;
	
	$result = mysql_query($query);
	
	$row = mysql_fetch_array($result);			
	
	$count = $row["Students_count"];	
	
	return $count;

}



function deleteMsgs($id)
{

	$quary = "delete from msgs where id=".$id;	
		
	mysql_query($quary);

}


function getMsgs($id)
{
		
	$product = new Msgs();
			
	$query = "select * from msgs where id=".$id;
	
	$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

	$product->id = $row["id"];	
	
	$product->student_id = $row["student_id"];	
			
	$product->teacher_id = $row["teacher_id"];
	
	$product->msg_title = $row["msg_title"];
				
	$product->msg = $row["msg"];
	
	$product->msg_datetime = $row["msg_datetime"];
	
	$product->msg_shown = $row["msg_shown"];		
 	   
	  return $product; 
}



}

?>