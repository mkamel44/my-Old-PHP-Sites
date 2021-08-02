<?php

include("Supervisor.php");

class SupervisorDbase
{
	function checkSupervisor( $superv )
	{
				
		$quary = "select * from supervisor where name='".$superv->name."' and password='".$superv->password."' and id=".$superv->id;
		
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
	
	function updateSupervisor( $superv )
	  {
		  
		$quary = "update supervisor set name='".$superv->name."',password='".$superv->password."',department='".$superv->department."' where id=".$superv->id;
	
		   mysql_query($quary);
		  
	  }
	  
	  function updateNew( $superv )
	  {
		  
		$quary = "update news set title='".$superv->name."',data='".$superv->department."' where id=".$superv->id;
	
		   mysql_query($quary);
		  
	  }
	  
	     function getImgs($a)
  {
      
      $products = array();
          
      $query = "select * from imgs where depa='".$a."' order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Supervisor();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

        $product->name = $row["img"];  
		 
		$product->password = $row["data_text"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
  
  
	  function updateImg( $data_text , $r )
	  {

		$quary = "update imgs set data_text='".$data_text."' where id=".$r;
	
		   mysql_query($quary);
		  
	  }
  
    function getNews()
  {
      
      $products = array();
          
      $query = "select * from news order by id desc";
    
      $result = mysql_query($query);
  
      $num_results = mysql_num_rows($result);
          
      for ($i=0; $i < $num_results; $i++)
      {
        $product = new Supervisor();
        
        $row = mysql_fetch_array($result);  
      
        $product->id = $row["id"];  

         $product->name = $row["title"];
		 
		 $product->department = $row["data"];  
  
        $products[$i] = $product;
  
      }
         
    return $products; 
  }
 
   function  getSupervisor($id)
  {
      
    $product = new Supervisor();
        
    $query = "select * from supervisor where id=".$id;

    $result = mysql_query($query);
    
    $row = mysql_fetch_array($result);      
    
    $product->id = $row["id"];  

    $product->name = $row["name"];
	
	$product->password = $row["password"]; 
		 
    $product->department = $row["department"]; 

    return $product; 
  }
  
  function  getNewByID($id)
  {
      
    $product = new Supervisor();
        
    $query = "select * from news where id=".$id;
    
    $result = mysql_query($query);
    
    $row = mysql_fetch_array($result);      
    
    $product->id = $row["id"];  

   $product->name = $row["title"];
		 
	$product->department = $row["data"]; 

    return $product; 
  }
  
   function  getImgByID($id)
  {
      
    $product = new Supervisor();
        
    $query = "select * from imgs where id=".$id;
    
    $result = mysql_query($query);
    
    $row = mysql_fetch_array($result);      
    
    $product->id = $row["id"];  

    $product->name = $row["img"];
		 
	$product->department = $row["depa"]; 
	
	$product->password = $row["data_text"]; 
	
	

    return $product; 
  }
  
  function addImg( $req , $a , $asa )
	  {
		  
		  $quary = "insert into imgs (img,depa,data_text)
		   values ('".$req."','".$a."','".$asa."')";
		
		   mysql_query($quary);
		  
	  }
	  
	    function addNew( $title , $data )
	  {
		  
		  $quary = "insert into news (title,data)
		   values ('".$title."','".$data."')";
		
		   mysql_query($quary);
		  
	  }
	  
	function deleteImg($req)
	{
		$quary = "delete from imgs where id=".$req;		
		
		mysql_query($quary);
	}
	
	function deleteNew($req)
	{
		$quary = "delete from news where id=".$req;		
		
		mysql_query($quary);
	}

}

?>
