<?php

include("Phones.php");

class PhonesDbase
{
	function addPhone( $phone )
	{
		
			$quary = "insert into phones (phones_card_id,phones_number,phones_units,phones_price,phones_date_of_req)
			 values (".$phone->phones_card_id.",'".$phone->phones_number."',".$phone->phones_units.",".$phone->phones_price.",'".$phone->phones_date_of_req."')";
		
			 mysql_query($quary);
			
	}
	
	function getPhoneNumbersByCard_id( $card_id )
	{
			
			$products = array();
					
			$query = "select * from phones where phones_card_id = ".$card_id." order by phones_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Phones();
				
				$row = mysql_fetch_array($result);	
			
				$product->phones_id = $row["phones_id"];	

				$product->phones_card_id = $row["phones_card_id"];	
				
				$product->phones_number = $row["phones_number"];
				
				$product->phones_units = $row["phones_units"];
				
				$product->phones_price = $row["phones_price"];
				
				$product->phones_date_of_req = $row["phones_date_of_req"];
				
				$product->phones_date_of_res = $row["phones_date_of_res"];
				
				$product->phones_done = $row["phones_done"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	


	function getPhoneNumbersNotGo()
	{
			
			$products = array();
					
			$query = "select * from phones where phones_done = '' order by phones_id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Phones();
				
				$row = mysql_fetch_array($result);	
			
				$product->phones_id = $row["phones_id"];	

				$product->phones_card_id = $row["phones_card_id"];	
				
				$product->phones_number = $row["phones_number"];
				
				$product->phones_units = $row["phones_units"];
				
				$product->phones_price = $row["phones_price"];
				
				$product->phones_date_of_req = $row["phones_date_of_req"];
				
				$product->phones_date_of_res = $row["phones_date_of_res"];
				
				$product->phones_done = $row["phones_done"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function updateCardsAmount( $cards_id , $cards_amount )
	{
			
		$quary = "update cards set cards_amount=".$cards_amount." where cards_id=".$cards_id;

		mysql_query($quary);
			
	}
	
	function updatePhoneDone( $phone )
	{
			
		$quary = "update phones set phones_done='".$phone->phones_done."',phones_date_of_res='".$phone->phones_date_of_res."' where phones_id=".$phone->phones_id;

		mysql_query($quary);
			
	}
	
	function getPhoneAmount($card_id)
	{
				
		$query = "select * from cards where cards_id=".$card_id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
	
		return $row["cards_amount"]; 
	}
}

?>
