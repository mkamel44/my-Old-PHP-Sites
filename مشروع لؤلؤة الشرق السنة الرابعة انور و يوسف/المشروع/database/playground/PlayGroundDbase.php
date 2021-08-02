<?php

include("PlayGround.php");

class PlayGroundDbase
{
	function addPlayGround( $req )
	  {
		  
		  $quary = "insert into playground (department_id,price,start,hours,done,approval,card_id)
		   values (".$req->department_id.",".$req->price.",'".$req->start."',".$req->hours.",'".$req->done."','".$req->approval."',".$req->card_id.")";
		
		
		   mysql_query($quary);
		  
	  }
	  
	  function updatePlayGroundBooking( $id ,  $approval)
	  {
		  
		$quary = "update playground set approval='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	   function updatePlayGroundBookingYes( $id ,  $approval)
	  {
		  
		$quary = "update playground set done='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	    function getPlayGroundBooking()
  {
      
      $products = array();
          
      $query = "select * from playground where approval = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new PlayGround();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->start = $row["start"]; 
		 
		 $product->hours = $row["hours"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
   function getPlayGroundBookingYes()
  {
      
      $products = array();
          
      $query = "select * from playground where  approval = 'true' and done = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new PlayGround();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->start = $row["start"]; 
		 
		 $product->hours = $row["hours"];   
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
	    return $products; 
  }
  
        function getBookingByCardID($cardID)
  {
      
      $products = array();
          
      $query = "select * from playground where card_id = ".$cardID." order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new PlayGround();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->start = $row["start"]; 
		 
		 $product->hours = $row["hours"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
}

?>
