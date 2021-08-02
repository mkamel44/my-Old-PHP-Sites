<?php

include("Messages.php");

include("Messages_Debate.php");

class MessagesDbase
{

	function addMessages( $req )
	{

		$quary = "insert into messages (depa_id,university_no,name,title,supervisor_name,supervisor_name1,registration_date,grant_date,comments_data)
		values ('".$req->depa_id."','".$req->university_no."','".$req->name."','".$req->title."','".$req->supervisor_name."','".$req->supervisor_name1."','".$req->registration_date."','".$req->grant_date."','".$req->comments_data."')";

		mysql_query($quary);

	}


	function  getMessageByID($id)
	{

		$product = new Messages();

		$query   = "select * from messages where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->university_no = $row["university_no"];

		$product->name = $row["name"];

		$product->title = $row["title"];

		$product->supervisor_name = $row["supervisor_name"];
		
		$product->supervisor_name1 = $row["supervisor_name1"];

		$product->registration_date = $row["registration_date"];

		$product->grant_date = $row["grant_date"];

		$product->comments_data = $row["comments_data"];

		return $product;
	}

	function updateMessages( $req )
	{

		$quary = "update messages set depa_id='".$req->depa_id."',university_no='".$req->university_no."',name='".$req->name."',title='".$req->title."',supervisor_name='".$req->supervisor_name."',supervisor_name1='".$req->supervisor_name1."',registration_date='".$req->registration_date."',grant_date='".$req->grant_date."',comments_data='".$req->comments_data."' where id=".$req->id;

		mysql_query($quary);

	}

	function checkdeletingMessaages( $id_c )
	{

		$quary       = "select * from messages_debate where messages_id=".$id_c;

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


	function deleteMessages($id_c)
	{
		$quary = "delete from messages where id=".$id_c;

		mysql_query($quary);
	}


	function  getCountMessages()
	{

		$query = "select count(id) as lolo from messages order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}


	function getMessages( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from messages order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->university_no = $row["university_no"];

			$product->name = $row["name"];

			$product->title = $row["title"];

			$product->supervisor_name = $row["supervisor_name"];
			
			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->registration_date = $row["registration_date"];

			$product->grant_date = $row["grant_date"];

			$product->comments_data = $row["comments_data"];


			$products[$i] = $product;

		}

		return $products;
	}

	function updatePDF( $pdf , $id )
	{

		$quary = "update messages_debate set pdf='".$pdf."' where id=".$id;

		mysql_query($quary);

	}


	function getAllMessages()
	{

		$products = array();

		$query       = "select * from messages order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->university_no = $row["university_no"];

			$product->name = $row["name"];

			$product->title = $row["title"];

			$product->supervisor_name = $row["supervisor_name"];
			
			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->registration_date = $row["registration_date"];

			$product->grant_date = $row["grant_date"];

			$product->comments_data = $row["comments_data"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllMessagesByDepaID($depa_id)
	{

		$products = array();

		$query       = "select * from messages where depa_id ='".$depa_id."' order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->university_no = $row["university_no"];

			$product->name = $row["name"];

			$product->title = $row["title"];

			$product->supervisor_name = $row["supervisor_name"];
			
			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->registration_date = $row["registration_date"];

			$product->grant_date = $row["grant_date"];

			$product->comments_data = $row["comments_data"];

			$products[$i] = $product;

		}

		return $products;
	}

	function getAllMessagesByTitleOrDate($title,$registration_date)
	{

		$products = array();

		$query = "select * from messages where";

		if($title != "")
		{
			$query .= " title like '%".$title."%'";
		}

		if($registration_date != "")
		{
			if($title != "")
			{
				$query .= " or ";
			}

			$query .= " registration_date like '".$registration_date."'";
		}

		$query .= " order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->depa_id = $row["depa_id"];

			$product->university_no = $row["university_no"];

			$product->name = $row["name"];

			$product->title = $row["title"];

			$product->supervisor_name = $row["supervisor_name"];
			
			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->registration_date = $row["registration_date"];

			$product->grant_date = $row["grant_date"];

			$product->comments_data = $row["comments_data"];

			$products[$i] = $product;

		}

		return $products;
	}




	function addMessages_Debate( $req )
	{

		$quary = "insert into messages_debate (messages_id,supervisor_name1,supervisor_desc1,supervisor_name2,supervisor_desc2,supervisor_name3,supervisor_desc3,supervisor_name4,supervisor_desc4,supervisor_name5,supervisor_desc5,the_time,the_date,the_place,pdf,done)
		values ('".$req->messages_id."','".$req->supervisor_name1."','".$req->supervisor_desc1."','".$req->supervisor_name2."','".$req->supervisor_desc2."','".$req->supervisor_name3."','".$req->supervisor_desc3."','".$req->supervisor_name4."','".$req->supervisor_desc4."','".$req->supervisor_name5."','".$req->supervisor_desc5."','".$req->the_time."','".$req->the_date."','".$req->the_place."','".$req->pdf."','".$req->done."')";

		mysql_query($quary);

	}

	function  getMessage_DebateByID($id)
	{

		$product = new Messages_Debate();

		$query   = "select * from messages_debate where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->messages_id = $row["messages_id"];

		$product->supervisor_name1 = $row["supervisor_name1"];

		$product->supervisor_desc1 = $row["supervisor_desc1"];

		$product->supervisor_name2 = $row["supervisor_name2"];

		$product->supervisor_desc2 = $row["supervisor_desc2"];

		$product->supervisor_name3 = $row["supervisor_name3"];

		$product->supervisor_desc3 = $row["supervisor_desc3"];

		$product->supervisor_name4 = $row["supervisor_name4"];

		$product->supervisor_desc4 = $row["supervisor_desc4"];

		$product->supervisor_name5 = $row["supervisor_name5"];

		$product->supervisor_desc5 = $row["supervisor_desc5"];

		$product->the_time = $row["the_time"];

		$product->the_date = $row["the_date"];

		$product->the_place = $row["the_place"];

		$product->pdf = $row["pdf"];
		
		$product->done = $row["done"];

		return $product;
	}

	function updateMessages_Debate( $req )
	{

		$quary = "update messages_debate set messages_id='".$req->messages_id."',supervisor_name1='".$req->supervisor_name1."',supervisor_desc1='".$req->supervisor_desc1."',supervisor_name2='".$req->supervisor_name2."',supervisor_desc2='".$req->supervisor_desc2."',supervisor_name3='".$req->supervisor_name3."',supervisor_desc3='".$req->supervisor_desc3."',supervisor_name4='".$req->supervisor_name4."',supervisor_desc4='".$req->supervisor_desc4."',supervisor_name5='".$req->supervisor_name5."',supervisor_desc5='".$req->supervisor_desc5."',the_time='".$req->the_time."',the_date='".$req->the_date."',the_place='".$req->the_place."',pdf='".$req->pdf."',done='".$req->done."' where id=".$req->id;

		mysql_query($quary);

	}


	function deleteMessages_Debate($id_c)
	{
		$quary = "delete from messages_debate where id=".$id_c;

		mysql_query($quary);
	}

	function  getCountMessages_Debate()
	{

		$query = "select count(id) as lolo from messages_debate order by id";

		$result= mysql_query($query);

		$row   = mysql_fetch_array($result);

		return $row["lolo"];

	}


	function getMessages_Debate( $offset , $row_count)
	{

		$products = array();

		$query       = "select * from messages_debate order by id desc LIMIT ".$row_count." OFFSET ".$offset;

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages_Debate();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->messages_id = $row["messages_id"];

			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->supervisor_desc1 = $row["supervisor_desc1"];

			$product->supervisor_name2 = $row["supervisor_name2"];

			$product->supervisor_desc2 = $row["supervisor_desc2"];

			$product->supervisor_name3 = $row["supervisor_name3"];

			$product->supervisor_desc3 = $row["supervisor_desc3"];

			$product->supervisor_name4 = $row["supervisor_name4"];

			$product->supervisor_desc4 = $row["supervisor_desc4"];

			$product->supervisor_name5 = $row["supervisor_name5"];

			$product->supervisor_desc5 = $row["supervisor_desc5"];

			$product->the_time = $row["the_time"];

			$product->the_date = $row["the_date"];

			$product->the_place = $row["the_place"];

			$product->pdf = $row["pdf"];
			
			$product->done = $row["done"];

			$products[$i] = $product;

		}

		return $products;
	}
	
	function getAllMessages_DebateByDepaID($depa_id)
	{

		$products = array();

		$query       = "select * from messages where depa_id ='".$depa_id."' order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			
			$row     = mysql_fetch_array($result);

			$rrr = $this->getMessage_DebateByID($row["id"]);
			
			if($rrr->id != "" && $rrr->id != 0)
			{
				$products[$i] = $product;
			}
			
		}

		return $products;
	}
	
	function getAllMessages_DebateByDate( $the_date )
	{

		$products = array();

		$query       = "select * from messages_debate where the_date='".$the_date."' order by id";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages_Debate();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->messages_id = $row["messages_id"];

			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->supervisor_desc1 = $row["supervisor_desc1"];

			$product->supervisor_name2 = $row["supervisor_name2"];

			$product->supervisor_desc2 = $row["supervisor_desc2"];

			$product->supervisor_name3 = $row["supervisor_name3"];

			$product->supervisor_desc3 = $row["supervisor_desc3"];

			$product->supervisor_name4 = $row["supervisor_name4"];

			$product->supervisor_desc4 = $row["supervisor_desc4"];

			$product->supervisor_name5 = $row["supervisor_name5"];

			$product->supervisor_desc5 = $row["supervisor_desc5"];

			$product->the_time = $row["the_time"];

			$product->the_date = $row["the_date"];

			$product->the_place = $row["the_place"];

			$product->pdf = $row["pdf"];
			
			$product->done = $row["done"];

			$products[$i] = $product;

		}

		return $products;
	}
	
	function getAllMessages_Debate()
	{

		$products = array();

		$query       = "select * from messages_debate order by id desc";

		$result      = mysql_query($query);

		$num_results = mysql_num_rows($result);

		for($i = 0; $i < $num_results; $i++){
			$product = new Messages_Debate();

			$row     = mysql_fetch_array($result);

			$product->id = $row["id"];

			$product->messages_id = $row["messages_id"];

			$product->supervisor_name1 = $row["supervisor_name1"];

			$product->supervisor_desc1 = $row["supervisor_desc1"];

			$product->supervisor_name2 = $row["supervisor_name2"];

			$product->supervisor_desc2 = $row["supervisor_desc2"];

			$product->supervisor_name3 = $row["supervisor_name3"];

			$product->supervisor_desc3 = $row["supervisor_desc3"];

			$product->supervisor_name4 = $row["supervisor_name4"];

			$product->supervisor_desc4 = $row["supervisor_desc4"];

			$product->supervisor_name5 = $row["supervisor_name5"];

			$product->supervisor_desc5 = $row["supervisor_desc5"];

			$product->the_time = $row["the_time"];

			$product->the_date = $row["the_date"];

			$product->the_place = $row["the_place"];

			$product->pdf = $row["pdf"];
			
			$product->done = $row["done"];

			$products[$i] = $product;

		}

		return $products;
	}
	

	function  getLastMessage()
	{

		$product = new Messages();

		$query   = "SELECT * FROM messages ORDER BY id DESC LIMIT 1";

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->depa_id = $row["depa_id"];

		$product->university_no = $row["university_no"];

		$product->name = $row["name"];

		$product->title = $row["title"];

		$product->supervisor_name = $row["supervisor_name"];
		
		$product->supervisor_name1 = $row["supervisor_name1"];

		$product->registration_date = $row["registration_date"];

		$product->grant_date = $row["grant_date"];

		$product->comments_data = $row["comments_data"];

		return $product;
	}



}

?>
