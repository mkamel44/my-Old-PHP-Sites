<?php

include("Depas.php");

include("Subjects.php");

class DepasDbase
{

	function addDepas( $req )
	{

		$quary = "insert into depas (name)
		values ('".$req->name."')";

		mysql_query($quary);

	}

	function addSubjects( $req )
	{

		$quary = "insert into subjects (name,depa_id)
		values ('".$req->name."',".$req->depa_id.")";

		mysql_query($quary);

	}

	function checkdeletingSubjectsFromAccepted_Students( $id_c )
	{

		$quary       = "select * from accepted_students where subject_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function checkdeletingSubjectsFromExam_Schedule( $id_c )
	{

		$quary       = "select * from exam_schedule where subject_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function checkdeletingSubjectsFromTime_Schedule( $id_c )
	{

		$quary       = "select * from time_schedule where subject_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}



	function checkdeletingDepa( $id_c )
	{

		$quary       = "select * from subjects where depa_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function checkdeletingDepaFromMessages( $id_c )
	{

		$quary       = "select * from messages where depa_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function checkdeletingDepaFromTheses( $id_c )
	{

		$quary       = "select * from theses where depa_id=".$id_c;

		$result      = mysql_query($quary);

		$num_results = mysql_num_rows($result);

		if($num_results == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}


	function  getDepaByID($id)
	{

		$product = new Depas();

		$query   = "select * from depas where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->name = $row["name"];

		return $product;
	}

	function  getSubjectByID($id)
	{

		$product = new Subjects();

		$query   = "select * from subjects where id=".$id;
		
		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->name = $row["name"];

		$product->depa_id = $row["depa_id"];

		return $product;
	}



	function updateDepas( $req )
	{

		$quary = "update depas set name='".$req->name."' where id=".$req->id;

		mysql_query($quary);

	}

	function updateSubjects( $req )
	{

		$quary = "update subjects set name='".$req->name."',depa_id='".$req->depa_id."' where id=".$req->id;

		mysql_query($quary);

	}


	function deleteDepas($id_c)
	{
		$quary = "delete from depas where id=".$id_c;

		mysql_query($quary);
	}

	function deleteSubjects($id_c)
	{
		$quary = "delete from subjects where id=".$id_c;

		mysql_query($quary);
	}

	function  getCountDepas()
	{

		$query = "select count(id) as lolo from depas order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function  getCountSubjects()
	{

		$query = "select count(id) as lolo from subjects order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}
	
	function  getCountSubjectsByDepa($depa)
	{

		$query = "select count(id) as lolo from subjects where depa_id='".$depa."' order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function getDepas( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from depas order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Depas();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->name = $row["name"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getSubjects( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from subjects order by id desc LIMIT ".$row_count." OFFSET ".$offset;


		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Subjects();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->name = $row["name"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllDepas()
	{

		$products = array();

		$query       = "select * from depas order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Depas();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->name = $row["name"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllSubjectsByDebaID($id)
	{

		$products = array();

		$query       = "select * from subjects where depa_id=".$id." order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Subjects();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->name = $row["name"];

			$products[$i] = $product;

		}

		return $products;
	}


}

?>
