<?php

include("Cards.php");

class CardsDbase
{
	function addCard( $req )
	  {
		  
		  $quary = "insert into card (code,password,customer_name,balance,remaining_balance)
		   values ('".$req->code."','".$req->password."','".$req->customer_name."',".$req->balance.",".$req->remaining_balance.")";
		
		   mysql_query($quary);
		  
	  }
	
	function updateCard( $superv )
	  {
		  
		$quary = "update card set code='".$superv->code."',password='".$superv->password."',customer_name='".$superv->customer_name."' where id=".$superv->id;
	
		   mysql_query($quary);
		  
	  }
	  
	  function updateCardRemaining_Balance( $card_id , $remaining_balance )
	  {
		  
		$quary = "update card set remaining_balance=".$remaining_balance." where id=".$card_id;
	
		   mysql_query($quary);
		  
	  }
	  
	  function getCards()
  {
      
      $products = array();
          
      $query = "select * from card order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Cards();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->code = $row["code"];  
		
		 $product->password = $row["password"];  
				
		 $product->customer_name = $row["customer_name"];  
						
		 $product->balance = $row["balance"];  
										
		 $product->remaining_balance = $row["remaining_balance"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
  function  getCardByID($card_id)
  {
      
    $product = new Cards();
        
    $query = "select * from card where id=".$card_id;
    
    $result = mysql_query($query);
    
    $row = mysql_fetch_array($result);      
    
    $product->id = $row["id"];  

    $product->code = $row["code"];  
	
    $product->password = $row["password"];  
	
    $product->customer_name = $row["customer_name"];  
	
    $product->balance = $row["balance"];  
	
    $product->remaining_balance = $row["remaining_balance"];  

    return $product; 
  }
  
  function checkCard( $code,$password )
	{
				
		$quary = "select * from card where code='".$code."' and password='".$password."'";
		
		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);

    	if($num_results  == 0)
		{
			return 0;
		}
		else
		{
			 $row = mysql_fetch_array($result); 
			 
			 return $row["id"];
			
		}
		
	}
  
}

?>
