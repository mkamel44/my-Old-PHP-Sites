<?php

include("Differentiation_dates.php");

class Differentiation_datesDbase
{


	function updateDifferentiation_dates( $admin )
	{

		$quary = "update differentiation_dates set the_year='".$admin->the_year."' , from_date='".$admin->from_date."' , to_date='".$admin->to_date."' where id=".$admin->id;


		mysql_query($quary);

	}
	
	
	function  getDifferentiation_dates($id)
	{

		$product = new Differentiation_dates();

		$query   = "select * from differentiation_dates where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->the_year = $row["the_year"];

		$product->from_date = $row["from_date"];
		
		$product->to_date = $row["to_date"];

		return $product;
	}



}

?>
