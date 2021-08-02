<?php

include("Writer.php");

class WriterDbase
{
	function deleteWriter($id_c)
	{
		$quary = "delete from writers where id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getWriters()
	{
			
			$products = array();
					
			$query = "select * from writers order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Writer();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->name = $row["name"];	
				
				$product->pass = $row["pass"];	
				
				$product->details = $row["details"];
				
				$product->person_num_book = $row["person_num_book"];
				
				$product->full_name = $row["full_name"];	
				
				$product->pic = $row["pic"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function updateWriter( $req )
	{
			
		$quary = "update writers set name='".$req->name."',pass='".$req->pass."',details='".$req->details."',full_name='".$req->full_name."',pic='".$req->pic."' where id=".$req->id;

			 mysql_query($quary);
			
	}
	
	function updateNamePass( $req )
	{
			
		$quary = "update writers set name='".$req->name."',pass='".$req->pass."' where id=".$req->id;

			 mysql_query($quary);
			
	}

	
	function  getWriterByID($id)
	{
			
		$product = new Writer();
				
		$query = "select * from writers where id=".$id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		$product->id = $row["id"];	

		$product->name = $row["name"];	
				
		$product->pass = $row["pass"];	
				
		$product->details = $row["details"];
				
		$product->full_name = $row["full_name"];
		
		$product->pic = $row["pic"];
		
		return $product; 
	}

	
	function addWriter( $req )
	{
			
			$quary = "insert into writers (name,pass,details,full_name,pic)
			 values ('".$req->name."','".$req->pass."','".$req->details."','".$req->full_name."','".$req->pic."')";
	
			 mysql_query($quary);
			
	}
	
	 function checkWriter( $code,$password )
	{
				
		$quary = "select * from writers where name='".$code."' and pass='".$password."'";
		
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
	
	function checkWriterCanDel( $id )
	{
				
		$quary = "select * from books where writer_id=".$id;

		$result = mysql_query($quary);
		
		$num_results = mysql_num_rows($result);
		
		if($num_results  == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	function checkWriterBooks( $id )
	{
				
		$quary = "select * from books where writer_id=".$id." and agree='true'";

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
}

?>
