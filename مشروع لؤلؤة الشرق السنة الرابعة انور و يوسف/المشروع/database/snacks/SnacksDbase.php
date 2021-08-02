<?php

include("Snacks.php");

class SnacksDbase
{
	function deleteSnack($id_c)
	{
		$quary = "delete from snacks where snack_id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getSnacks($shop_id)
	{
			
			$products = array();
					
			$query = "select * from snacks where snack_shop_id=".$shop_id." order by snack_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Snacks();
				
				$row = mysql_fetch_array($result);	
			
				$product->snack_id = $row["snack_id"];	

				$product->snack_shop_id = $row["snack_shop_id"];	
				
				$product->snack_name = $row["snack_name"];	
				
				$product->snack_desc = $row["snack_desc"];	
				
				$product->snack_pic = $row["snack_pic"];	
				
				$product->snack_price = $row["snack_price"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	
	function updateSnack( $req )
	{
			
		$quary = "update snacks set snack_desc='".$req->snack_desc."',snack_name='".$req->snack_name."',snack_price=".$req->snack_price." where snack_id=".$req->snack_id;

			 mysql_query($quary);
			
	}

	
	function  getSnackByID($snack_id)
	{
			
		$product = new Snacks();
				
		$query = "select * from snacks where snack_id=".$snack_id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		$product->snack_id = $row["snack_id"];	

		$product->snack_shop_id = $row["snack_shop_id"];	
				
		$product->snack_name = $row["snack_name"];	
				
		$product->snack_desc = $row["snack_desc"];	
				
		$product->snack_pic = $row["snack_pic"];	
				
		$product->snack_price = $row["snack_price"];	

		return $product; 
	}

	
	function addSnack( $req )
	{
			
			$quary = "insert into snacks(snack_shop_id,snack_name,snack_desc,snack_pic,snack_price)
			 values (".$req->snack_shop_id.",'".$req->snack_name."','".$req->snack_desc."','".$req->snack_pic."',".$req->snack_price.")";
		
			 mysql_query($quary);
			
	}
}

?>
