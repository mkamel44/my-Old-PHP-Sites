<?php

include("BasketData.php");

class BasketDbase
{
	function deleteBasketNotBuy($id_c)
	{
		$quary = "delete from basket_data where card_id=".$id_c." and  booking_time='0000-00-00 00:00:00'";		
		
		mysql_query($quary);
	}
	
	function addBasketData( $basket_data )
	{
			
			$quary = "insert into basket_data(card_id,snack_name,snack_desc,booking_time,snack_price) values (".$basket_data->card_id.",'".$basket_data->snack_name."','".$basket_data->snack_desc."','".$basket_data->booking_time."',".$basket_data->snack_price.")";
	
	
			 mysql_query($quary);
			
	}
	
	function getBasketDataByCardID($cardID)
  {
      
      $products = array();
          
      $query = "select * from basket_data where card_id = ".$cardID." order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new BasketData();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->card_id = $row["card_id"];  
		
		 $product->snack_name = $row["snack_name"];  
				
		 $product->snack_desc = $row["snack_desc"];  
						
		 $product->booking_time = $row["booking_time"];  
										
		 $product->snack_price = $row["snack_price"];  
	
         $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
  function getAllBasketNotBuy()
  {
      
      $products = array();
          
      $query = "select DISTINCT card_id from basket_data where booking_time ='0000-00-00 00:00:00'";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new BasketData();
        
        $row = mysql_fetch_array($result);  
      
         $product->card_id = $row["card_id"];  		

         $products[$i] = $product;
  
      }
         
    return $products; 
  }
  

  function getAllBasketNotBuyByCard_id($cardID)
  {
      
      $products = array();
          
      $query = "select * from basket_data where card_id = ".$cardID." and booking_time ='0000-00-00 00:00:00' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new BasketData();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->card_id = $row["card_id"];  
		
		 $product->snack_name = $row["snack_name"];  
				
		 $product->snack_desc = $row["snack_desc"];  
						
		 $product->booking_time = $row["booking_time"];  
										
		 $product->snack_price = $row["snack_price"];  
	
         $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
  function getSumAllBasketNotBuy($card_id)
  {
	$sum_all = 0;
        
    $query = "select sum(snack_price) as lolo from basket_data where card_id = ".$card_id." and booking_time ='0000-00-00 00:00:00'";
    
    $result = mysql_query($query);
    
    $row = mysql_fetch_array($result);      
    
    $sum_all = $row["lolo"];  

    return $sum_all;    
	  
  }
  
  function updateAllBasketToBuy( $card_id ,  $lolo)
  {
		  
	$quary = "update basket_data set booking_time='".$lolo."' where card_id = ".$card_id." and booking_time ='0000-00-00 00:00:00'";
	
    mysql_query($quary);
		  
   }  
	
	
}

?>
