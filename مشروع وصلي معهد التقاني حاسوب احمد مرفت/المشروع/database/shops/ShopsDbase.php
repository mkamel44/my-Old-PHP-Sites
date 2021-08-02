<?php

include("Shops.php");

class ShopsDbase
{
	function deleteShop($id_c)
	{
		$quary = "delete from shops where shop_id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getShops()
	{
			
			$products = array();
					
			$query = "select * from shops order by shop_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Shops();
				
				$row = mysql_fetch_array($result);	
			
				$product->shop_id = $row["shop_id"];	

				$product->shop_name = $row["shop_name"];	
				
				$product->shop_place = $row["shop_place"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function updateShop( $req )
	{
			
		$quary = "update shops set shop_name='".$req->shop_name."',shop_place='".$req->shop_place."' where shop_id=".$req->shop_id;

			 mysql_query($quary);
			
	}

	
	function  getShopByID($shop_id)
	{
			
		$product = new Shops();
				
		$query = "select * from shops where shop_id=".$shop_id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		$product->shop_name = $row["shop_name"];	

		$product->shop_place = $row["shop_place"];	

		return $product; 
	}

	
	function addShop( $req )
	{
			
			$quary = "insert into shops (shop_name,shop_place)
			 values ('".$req->shop_name."','".$req->shop_place."')";
		
			 mysql_query($quary);
			
	}
}

?>
