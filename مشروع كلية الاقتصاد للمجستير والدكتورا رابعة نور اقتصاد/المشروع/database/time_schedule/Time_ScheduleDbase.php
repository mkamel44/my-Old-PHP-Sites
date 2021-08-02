<?php

include("Time_Schedule.php");

class Time_ScheduleDbase
{
	function deleteTime_Schedule($id_c)
	{
		$quary = "delete from time_schedule where id=".$id_c;

		mysql_query($quary);
	}

	function  getCountTime_Schedule()
	{

		$query = "select count(id) as lolo from time_schedule order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}

	function getTime_Schedule( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from time_schedule order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Time_Schedule();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->subject_id = $row["subject_id"];

			$product->the_day = $row["the_day"];

			$product->the_time = $row["the_time"];

			$product->teacher_name = $row["teacher_name"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllTime_ScheduleByDepaID( $depa_id)
	{

		$products = array();

		$query       = "select * from time_schedule where depa_id = '".$depa_id."' order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Time_Schedule();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->subject_id = $row["subject_id"];

			$product->the_day = $row["the_day"];

			$product->the_time = $row["the_time"];

			$product->teacher_name = $row["teacher_name"];

			$products[$i] = $product;

		}

		return $products;
	}


	function  getTime_ScheduleByID($shop_id)
	{

		$product = new Time_Schedule();

		$query   = "select * from time_schedule where id=".$shop_id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->subject_id = $row["subject_id"];

		$product->the_day = $row["the_day"];

		$product->the_time = $row["the_time"];

		$product->teacher_name = $row["teacher_name"];

		return $product;
	}
	
	function  getTime_ScheduleBySubject_IDAndThe_Day($subject_id,$the_day)
	{

		$product = new Time_Schedule();

		$query   = "select * from time_schedule where subject_id='".$subject_id."' && the_day='".$the_day."'";

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->subject_id = $row["subject_id"];

		$product->the_day = $row["the_day"];

		$product->the_time = $row["the_time"];

		$product->teacher_name = $row["teacher_name"];

		return $product;
	}
	

	function updateTime_Schedule( $req )
	{

		$quary = "update time_schedule set depa_id='".$req->depa_id."',subject_id='".$req->subject_id."',the_day='".$req->the_day."',the_time='".$req->the_time."',teacher_name='".$req->teacher_name."' where id=".$req->id;

		mysql_query($quary);

	}


	function addTime_Schedule( $req )
	{

		$quary = "insert into time_schedule (depa_id,subject_id,the_day,the_time,teacher_name)
		values ('".$req->depa_id."','".$req->subject_id."','".$req->the_day."','".$req->the_time."','".$req->teacher_name."')";

		mysql_query($quary);

	}
}

?>
