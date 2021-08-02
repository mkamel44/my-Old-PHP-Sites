<?php

include("Students.php");

class StudentsDbase
{

function addStudents( $students )
{
		
		$quary = "insert into students 	(name,pass,fname,lname,father_name,mother_name,birth,phone,sex,classes_rooms_id)
		 values ('".$students->name."','".$students->pass."','".$students->fname."','".$students->lname."','".$students->father_name."','".$students->mother_name."','".$students->birth."','".$students->phone."','".$students->sex."',".$students->classes_rooms_id.")";
		 
		 mysql_query($quary);
		
}

function updateStudents( $students )
{
		
		$quary = "update students set name='".$students->name."',pass='".$students->pass."',fname='".$students->fname."',lname='".$students->lname."',father_name='".$students->father_name."',mother_name='".$students->mother_name."',birth='".$students->birth."',phone=".$students->phone.",sex='".$students->sex."',classes_rooms_id=".$students->classes_rooms_id." where id=".$students->id;

		 mysql_query($quary);
		
}



function getAllStudents2($classes_rooms_id)
{
		
	$products = array();
			
	$query = "select * from students where classes_rooms_id=".$classes_rooms_id." ORDER BY id desc";
	
	$result = mysql_query($query);
	
	$num_results = mysql_num_rows($result);
			
	for ($i=0; $i < $num_results; $i++)
	{
				$product = new Students();
				$row = mysql_fetch_array($result);			
				$product->id = $row["id"];	
				$product->fname = $row["fname"];			
				$product->lname = $row["lname"];
				$product->name = $row["name"];			
				$product->pass = $row["pass"];
				$product->father_name = $row["father_name"];
				$product->mother_name = $row["mother_name"];		
				$product->birth = $row["birth"];			
				$product->phone = $row["phone"];
				$product->sex = $row["sex"];
				$product->classes_rooms_id = $row["classes_rooms_id"];
				
				$products[$i] = $product;
	
	}
		   
  return $products; 
}


function getAllStudents()
{
		
	$products = array();
			
	$query = "select * from students ORDER BY id desc";
	
	$result = mysql_query($query);
	
	$num_results = mysql_num_rows($result);
			
	for ($i=0; $i < $num_results; $i++)
	{
				$product = new Students();
				$row = mysql_fetch_array($result);			
				$product->id = $row["id"];	
				$product->fname = $row["fname"];			
				$product->lname = $row["lname"];
				$product->name = $row["name"];			
				$product->pass = $row["pass"];
				$product->father_name = $row["father_name"];
				$product->mother_name = $row["mother_name"];		
				$product->birth = $row["birth"];			
				$product->phone = $row["phone"];
				$product->sex = $row["sex"];
				$product->classes_rooms_id = $row["classes_rooms_id"];
				
				$products[$i] = $product;
	
	}
		   
  return $products; 
}



function deleteStudent($id)
{

	$quary = "delete from students where id=".$id;	
		
	mysql_query($quary);

}


function getStudentsCount()
{
	$query = "select count(id) as Students_count from students";
	
	$result = mysql_query($query);
	
	$row = mysql_fetch_array($result);			
	
	$count = $row["Students_count"];	
	
	return $count;

}

function getStudent($id)
{
		
	$product = new Students();
			
	$query = "select * from students where id=".$id;
	
	$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

	$product->id = $row["id"];	

	$product->fname = $row["fname"];			

	$product->lname = $row["lname"];

	$product->name = $row["name"];

	$product->pass = $row["pass"];		

	$product->father_name = $row["father_name"];

	$product->mother_name = $row["mother_name"];		

	$product->birth = $row["birth"];			

	$product->phone = $row["phone"];

	$product->sex = $row["sex"];
	
	$product->classes_rooms_id = $row["classes_rooms_id"];
 	   
	  return $product; 
}


function checkStudent($name , $pass)
{

		
	$query = "select * from students where name='".$name."' and pass='".$pass."'";
	
	$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

	$num_results = mysql_num_rows($result);
		
		if($num_results  == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
}


function getStudentAs($name , $pass)
{

		
		$query = "select * from students where name='".$name."' and pass='".$pass."'";
		
		$result = mysql_query($query);

		$row = mysql_fetch_array($result);			
	
		return $row["id"];
}


}

?>