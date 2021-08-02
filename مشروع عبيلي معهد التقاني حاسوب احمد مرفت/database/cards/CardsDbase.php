<?php

include("Cards.php");

class CardsDbase
{

	function getCardsMessages()
	{
			
			$products = array();
					
			$query = "select * from cards where cards_messages_new = 'true' order by cards_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Cards();
				
				$row = mysql_fetch_array($result);	
			
				$product->cards_id = $row["cards_id"];	

				$product->cards_name = $row["cards_name"];	
				
				$product->cards_pass = $row["cards_pass"];
				
				$product->cards_amount = $row["cards_amount"];
				
				$product->cards_luk = $row["cards_luk"];
				
				$product->cards_messages = $row["cards_messages"];
				
				$product->cards_messages_new = $row["cards_messages_new"];
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}


	function checkCards( $card_a )
	{
				
		$quary = "select * from cards where cards_name='".$card_a->cards_name."' and cards_pass='".$card_a->cards_pass."' and cards_luk='true'";


		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);

    	if($num_results  == 0)
		{
			return false;
		}
		else
		{
			$row = mysql_fetch_array($result);
			
			$card_a->cards_id = $row["cards_id"];
		
			$card_a->cards_amount = $row["cards_amount"];
			
			return true;
		}
		
	}
	
	
	function checkCardsLuk( $card_a )
	{
				
		$quary = "select * from cards where cards_name='".$card_a->cards_name."' and cards_pass='".$card_a->cards_pass."' and cards_luk='false'";

		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);

    	if($num_results  == 0)
		{
			return false;
		}
		else
		{
			$row = mysql_fetch_array($result);
			
			$card_a->cards_id = $row["cards_id"];
		
			$card_a->cards_amount = $row["cards_amount"];
			
			return true;
		}
		
	}
	
	function checkCardsLukTrueByID( $cards_id )
	{

		$quary = "select * from cards where cards_id=".$cards_id." and cards_luk='true'";


		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);

    	if($num_results  == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}
	
	function updateCardsLuk( $cards_id , $cards_luk )
	{
			
		$quary = "update cards set cards_luk='".$cards_luk."' where cards_id=".$cards_id;

		mysql_query($quary);

	}
	

	function  getCardsByID($card_id)
	{
		$product = new Cards();
				
		$query = "select * from cards where cards_id=".$card_id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		$product->cards_id = $row["cards_id"];	

		$product->cards_name = $row["cards_name"];	
				
		$product->cards_pass = $row["cards_pass"];
				
		$product->cards_amount = $row["cards_amount"];		
		
		$product->cards_luk = $row["cards_luk"];
		
		return $product; 
	}
	
	
	function  getCardsMsg($card_id)
	{
			
		$query = "select * from cards where cards_id=".$card_id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		return $row["cards_messages"];
	}
	
	
	function updateCardsMsg( $cards_id , $msg )
	{
			
		$quary = "update cards set cards_messages='".$msg."' ,cards_messages_new='true' where cards_id=".$cards_id;

		mysql_query($quary);
			
	}
	
	function restCardsMsg( $cards_id )
	{
			
		$quary = "update cards set cards_messages='' ,cards_messages_new='' where cards_id=".$cards_id;

		mysql_query($quary);
			
	}

}

?>
