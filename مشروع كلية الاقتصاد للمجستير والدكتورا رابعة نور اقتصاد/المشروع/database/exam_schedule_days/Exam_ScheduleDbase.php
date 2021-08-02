<?php

include("Exam_Schedule.php");

include("Exam_Schedule_Days.php");

class Exam_ScheduleDbase
{

	function addExam_Schedule_Days( $req )
	{

		$quary = "insert into exam_schedule_days (the_day,the_date)
		values ('".$req->the_day."','".$req->the_date."')";

		mysql_query($quary);

	}

	function addExam_Schedule_Times( $req )
	{

		$quary = "insert into exam_schedule_times (depa_id,the_time)
		values ('".$req->depa_id."','".$req->the_time."')";

		mysql_query($quary);

	}


	function addExam_Schedule( $req )
	{

		$quary = "insert into exam_schedule (depa_id,subject_id,exam_schedule_days_id,exam_schedule_times_id)
		values ('".$req->depa_id."','".$req->subject_id."',".$req->exam_schedule_days_id.",".$req->exam_schedule_times_id.")";

		mysql_query($quary);

	}

	function checkdeletingExam_Schedule_Days( $id_c )
	{

		$quary       = "select * from exam_schedule where exam_schedule_days_id=".$id_c;

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

	function checkdeletingExam_Schedule_Times( $id_c )
	{

		$quary       = "select * from exam_schedule where exam_schedule_times_id=".$id_c;

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


	function  getExam_Schedule_DaysByID($id)
	{

		$product = new Exam_Schedule_Days();

		$query   = "select * from exam_schedule_days where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->the_day = $row["the_day"];

		$product->the_date = $row["the_date"];

		return $product;
	}

	function  getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($depa_id,$exam_schedule_days_id,$exam_schedule_times_id)
	{

		$product     = new Exam_Schedule();

		$query       = "select * from exam_schedule where depa_id='".$depa_id."' && exam_schedule_days_id='".$exam_schedule_days_id."' && exam_schedule_times_id='".$exam_schedule_times_id."'";
		
		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		if($num_results != 0)
		{
			
			$row = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->subject_id = $row["subject_id"];

			$product->exam_schedule_days_id = $row["exam_schedule_days_id"];

			$product->exam_schedule_times_id = $row["exam_schedule_times_id"];

		}


		return $product;
	}


	function  getExam_Schedule_TimesByID($id)
	{

		$product = new Exam_Schedule_Days();

		$query   = "select * from exam_schedule_times where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->the_time = $row["the_time"];

		return $product;
	}

	function  getExam_Schedule_TimesByDepaID($id)
	{

		$product = new Exam_Schedule_Days();

		$query   = "select * from exam_schedule_times where depa_id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->the_time = $row["the_time"];

		return $product;
	}



	function  getExam_ScheduleByID($id)
	{

		$product = new Exam_Schedule();

		$query   = "select * from exam_schedule where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->subject_id = $row["subject_id"];

		$product->exam_schedule_days_id = $row["exam_schedule_days_id"];

		$product->exam_schedule_times_id = $row["exam_schedule_times_id"];

		return $product;
	}



	function updateExam_Schedule_Days( $req )
	{

		$quary = "update exam_schedule_days set the_day='".$req->the_day."',the_date='".$req->the_date."' where id=".$req->id;

		mysql_query($quary);

	}

	function updateExam_Schedule_Times( $req )
	{

		$quary = "update exam_schedule_days set the_time='".$req->the_time."' where id=".$req->id;

		mysql_query($quary);

	}

	function updateExam_Schedule( $req )
	{

		$quary = "update exam_schedule set depa_id='".$req->depa_id."',subject_id='".$req->subject_id."',exam_schedule_days_id='".$req->exam_schedule_days_id."',exam_schedule_times_id='".$req->exam_schedule_times_id."' where id=".$req->id;

		mysql_query($quary);

	}


	function deleteExam_Schedule_Days($id_c)
	{
		$quary = "delete from exam_schedule_days where id=".$id_c;

		mysql_query($quary);
	}

	function deleteExam_Schedule_Times($id_c)
	{
		$quary = "delete from exam_schedule_times where id=".$id_c;

		mysql_query($quary);
	}

	function deleteExam_ScheduleByExam_Schedule_Days($id_c)
	{
		$quary = "delete from exam_schedule where exam_schedule_days_id=".$id_c;

		mysql_query($quary);
	}

	function deleteExam_ScheduleByExam_Schedule_Times($id_c)
	{
		$quary = "delete from exam_schedule where exam_schedule_times_id=".$id_c;

		mysql_query($quary);
	}


	function deleteExam_Schedule($id_c)
	{
		$quary = "delete from exam_schedule where id=".$id_c;

		mysql_query($quary);
	}

	function  getCountExam_Schedule_Days()
	{

		$query = "select count(id) as lolo from exam_schedule_days order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function  getCountExam_Schedule_Times()
	{

		$query = "select count(id) as lolo from exam_schedule_times order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}


	function  getCountExam_Schedule()
	{

		$query = "select count(id) as lolo from exam_schedule order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function getExam_Schedule_Days( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from exam_schedule_days order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Exam_Schedule_Days();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->the_day = $row["the_day"];

			$product->the_date = $row["the_date"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getExam_Schedule_Times( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from exam_schedule_times order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Exam_Schedule_Days();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->the_time = $row["the_time"];

			$product->depa_id = $row["depa_id"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getExam_Schedule( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from exam_schedule order by id desc LIMIT ".$row_count." OFFSET ".$offset;


		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Exam_Schedule();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->subject_id = $row["subject_id"];

			$product->depa_id = $row["depa_id"];

			$product->exam_schedule_days_id = $row["exam_schedule_days_id"];

			$product->exam_schedule_times_id = $row["exam_schedule_times_id"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllExam_Schedule_Days()
	{

		$products = array();

		$query       = "select * from exam_schedule_days order by the_date asc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Exam_Schedule_Days();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->the_day = $row["the_day"];

			$product->the_date = $row["the_date"];

			$products[$i] = $product;

		}

		return $products;
	}




}

?>
