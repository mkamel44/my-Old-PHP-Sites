<?php

include("Game_Swimming.php");

class Game_SwimmingDbase
{
	function addGame_Swimming( $req )
	  {
		  
		  $quary = "insert into game_swimming (department_id,price,booking_date,done,approval,card_id)
		   values (".$req->department_id.",".$req->price.",'".$req->booking_date."','".$req->done."','".$req->approval."',".$req->card_id.")";
		
		   mysql_query($quary);
		  
	  }
	  
	  function updateGame_SwimmingBooking( $id ,  $approval)
	  {
		  
		$quary = "update game_swimming set approval='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	   function updateGame_SwimmingBookingYes( $id ,  $approval)
	  {
		  
		$quary = "update game_swimming set done='".$approval."' where id=".$id;
	
		   mysql_query($quary);
		  
	  }
	  
	    function getGame_SwimmingBooking()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=1 or department_id=2 or department_id=3 or department_id=4) and approval = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
  	    function getGame_SwimmingBooking1()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=5 or department_id=6 or department_id=7) and approval = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
   function getGame_SwimmingBooking2()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=8 or department_id=9) and approval = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
   function getGame_SwimmingBookingYes()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=1 or department_id=2 or department_id=3 or department_id=4) and approval = 'true' and done = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
	    return $products; 
  }
  
     function getGame_SwimmingBookingYes1()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=5 or department_id=6 or department_id=7) and approval = 'true' and done = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
	    return $products; 
  }
  
       function getGame_SwimmingBookingYes2()
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=8 or department_id=9) and approval = 'true' and done = '' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
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
          
      $query = "select * from game_swimming where (department_id=1 or department_id=2 or department_id=3 or department_id=4) and card_id = ".$cardID." order by id desc";

      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
   function getBookingByCardID1($cardID)
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=5 or department_id=6 or department_id=7) and card_id = ".$cardID." order by id desc";

      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
 
    function getBookingByCardID2($cardID)
  {
      
      $products = array();
          
      $query = "select * from game_swimming where (department_id=8 or department_id=9) and card_id = ".$cardID." order by id desc";

      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Game_Swimming();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->department_id = $row["department_id"];  
		
		 $product->price = $row["price"];  
				
		 $product->booking_date = $row["booking_date"];  
						
		 $product->done = $row["done"];  
										
		 $product->approval = $row["approval"];  
		 
		 $product->card_id = $row["card_id"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }

  
}

?>
