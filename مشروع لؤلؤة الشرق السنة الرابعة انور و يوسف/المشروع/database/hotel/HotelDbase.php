<?php

include("Hotels.php");

class HotelDbase
{

	function addHotel( $req )
	  {
		  
		  $quary = "insert into hotel (department_id,price,booking_date,done,approval,card_id,night_num)
		   values (".$req->department_id.",".$req->price.",'".$req->booking_date."','".$req->done."','".$req->approval."',".$req->card_id.",".$req->night_num.")";
		
		   mysql_query($quary);
		  
	  }
	  
	  function updateHotelBooking( $id ,  $approval)
	  {
		  
		$quary = "update hotel set approval='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	   function updateHotelBookingYes( $id ,  $approval)
	  {
		  
		$quary = "update hotel set done='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	    function getHotelBooking()
  {
      
      $products = array();
          
      $query = "select * from hotel where approval = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Hotels();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"]; 
		 
		 $product->night_num = $row["night_num"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
   function getHotelBookingYes()
  {
      
      $products = array();
          
      $query = "select * from hotel where approval = 'true' and done = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Hotels();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
		 
		 $product->night_num = $row["night_num"];
  
        $products[$i] = $product;
  
      }
	    return $products; 
  }
  
 	  function getBookingByCardID($cardID)
  {
      
      $products = array();
          
      $query = "select * from hotel where card_id = ".$cardID." order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Hotels();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"]; 
		 
		 $product->night_num = $row["night_num"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
}

?>
