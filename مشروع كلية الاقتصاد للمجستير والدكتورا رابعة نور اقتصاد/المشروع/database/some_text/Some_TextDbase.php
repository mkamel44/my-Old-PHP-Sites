<?php

include("Some_Text.php");

class Some_TextDbase
{
	
	
	function updateText( $admin )
	{
			
		$quary = "update some_text set mytext='".$admin->mytext."'  where id=".$admin->id;
		
		
		mysql_query($quary);
			
	}
	
		
	function  getText($id)
	{

		$product = new Some_Text();

		$query   = "select * from some_text where id=".$id;

		$result  = mysql_query($query);

		$row     = mysql_fetch_array($result);

		$product->id = $row["id"];

		$product->mytext = $row["mytext"];

		return $product;
	}

}
?>
