<?php

include("Accepted_Students.php");

include("Students.php");

class Accepted_StudentsDbase
{
	function deleteAccepted_Students($id_c)
	{
		$quary = "delete from accepted_students where id=".$id_c;

		mysql_query($quary);
	}

	function deleteAccepted_StudentsByStudentID($id_c)
	{
		$quary = "delete from accepted_students where student_id=".$id_c;

		mysql_query($quary);
	}

	function deleteStudents($id_c)
	{
		$quary = "delete from students where id=".$id_c;

		mysql_query($quary);
	}

	function  getCountAccepted_Students()
	{

		$query = "select count(id) as lolo from accepted_students order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function  getCountStudents()
	{

		$query = "select count(id) as lolo from students order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function getAccepted_Students( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from accepted_students order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Accepted_Students();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->student_id = $row["student_id"];

			$product->subject_id = $row["subject_id"];

			$product->theoretical_sign = $row["theoretical_sign"];

			$product->practical_sign = $row["practical_sign"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getStudents( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from students order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Students();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->name = $row["name"];
			
			$product->father = $row["father"];
			
			$product->bdate = $row["bdate"];
			
			$product->sex = $row["sex"];
			
			$product->place = $row["place"];
			
			$product->num = $row["num"];

			$products[$i] = $product;

		}

		return $products;
	}


	function  getAccepted_StudentsByID($shop_id)
	{

		$product = new Accepted_Students();

		$query   = "select * from accepted_students where id=".$shop_id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->student_id = $row["student_id"];

		$product->subject_id = $row["subject_id"];

		$product->theoretical_sign = $row["theoretical_sign"];

		$product->practical_sign = $row["practical_sign"];

		return $product;
	}

	function  getAccepted_StudentsBySubjectIDAndStudentID($student_id,$subject_id)
	{

		$product = new Accepted_Students();

		$query   = "select * from accepted_students where student_id='".$student_id."' && subject_id ='".$subject_id."'";

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->student_id = $row["student_id"];

		$product->subject_id = $row["subject_id"];

		$product->theoretical_sign = $row["theoretical_sign"];

		$product->practical_sign = $row["practical_sign"];

		return $product;
	}


	function  getStudentsByID($shop_id)
	{

		$product = new Students();

		$query   = "select * from students where id=".$shop_id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->name = $row["name"];
		
		$product->father = $row["father"];
			
		$product->bdate = $row["bdate"];
			
		$product->sex = $row["sex"];
			
		$product->place = $row["place"];
			
		$product->num = $row["num"];

		return $product;
	}


	function updateAccepted_Students( $req )
	{

		$quary = "update accepted_students set theoretical_sign='".$req->theoretical_sign."',practical_sign='".$req->practical_sign."' where id=".$req->id;

		mysql_query($quary);

	}

	function updateStudents( $req )
	{

		$quary = "update students set name='".$req->name."',father='".$req->father."',bdate='".$req->bdate."',sex='".$req->sex."',place='".$req->place."',num='".$req->num."' where id=".$req->id;

		mysql_query($quary);

	}

	function getAllStudents()
	{

		$products = array();

		$query       = "select * from students order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Students();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->name = $row["name"];
			
			$product->father = $row["father"];
			
			$product->bdate = $row["bdate"];
			
			$product->sex = $row["sex"];
			
			$product->place = $row["place"];
			
			$product->num = $row["num"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllStudentsByDepaID($depa_id)
	{

		$products = array();

		$query       = "select * from students where depa_id='".$depa_id."' order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Students();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->name = $row["name"];
			
			$product->father = $row["father"];
			
			$product->bdate = $row["bdate"];
			
			$product->sex = $row["sex"];
			
			$product->place = $row["place"];
			
			$product->num = $row["num"];

			$products[$i] = $product;

		}

		return $products;
	}



	function addAccepted_Students( $req )
	{

		$quary = "insert into accepted_students (subject_id,student_id,theoretical_sign,practical_sign)
		values ('".$req->subject_id."','".$req->student_id."','".$req->theoretical_sign."','".$req->practical_sign."')";

		mysql_query($quary);

	}

	function addStudents( $req )
	{

		$quary = "insert into students (depa_id,name,father,bdate,sex,place,num)
		values ('".$req->depa_id."','".$req->name."','".$req->father."','".$req->bdate."','".$req->sex."','".$req->place."','".$req->num."')";

		mysql_query($quary);

	}
}

?>
