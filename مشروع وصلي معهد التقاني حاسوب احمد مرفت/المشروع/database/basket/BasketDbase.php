<?php

include("Basket.php");

include("BasketData.php");

class BasketDbase
{
	
	function addBasket( $req )
	{
			
			$quary = "insert into basket(basket_mob,basket_addr) values (".$req->basket_mob.",'".$req->basket_addr."')";
		
			 mysql_query($quary);
			
	}
	
	function  getLastBasketID()
	{
				
		$query = "SELECT * FROM basket ORDER BY basket_id DESC LIMIT 1";
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		return  $row["basket_id"];	

	}
	
	function addBasketData( $basket_id,$snack_id )
	{
			
			$quary = "insert into basket_data(basket_id,snack_id) values (".$basket_id.",".$snack_id.")";
	
			 mysql_query($quary);
			
	}
	
	function deleteBasket($id_c)
	{
		$quary = "delete from basket where basket_id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function deleteBasketDataByBasketID($id_c)
	{
		$quary = "delete from basket_data where basket_id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getAllBaskets()
	{
			
			$products = array();
					
			$query = "select * from basket ORDER BY basket_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Basket();
				
				$row = mysql_fetch_array($result);	
			
				$product->basket_id = $row["basket_id"];	

				$product->basket_mob = $row["basket_mob"];	
				
				$product->basket_addr = $row["basket_addr"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getAllBasketDatasByBasketID($id)
	{
			
			$products = array();
					
			$query = "select * from basket_data where basket_id=".$id;
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new BasketData();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->basket_id = $row["basket_id"];	
				
				$product->snack_id = $row["snack_id"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
}

?>
