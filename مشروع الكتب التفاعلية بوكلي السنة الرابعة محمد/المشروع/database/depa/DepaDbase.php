<?php

include("Depa.php");

class DepaDbase
{
	function deleteDepa($id_c)
	{
		$quary = "delete from depa where id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getDepas()
	{
			
			$products = array();
					
			$query = "select * from depa order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Depa();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->name = $row["name"];	
				
				$product->descr = $row["descr"];	
				
				$product->person_num = $row["person_num"];
				
				$product->person_num_book = $row["person_num_book"];	
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function updateDepa( $req )
	{
			
		$quary = "update depa set name='".$req->name."',descr='".$req->descr."' where id=".$req->id;

			 mysql_query($quary);
			
	}

	
	function  getDepaByID($id)
	{
			
		$product = new Depa();
				
		$query = "select * from depa where id=".$id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
		$product->id = $row["id"];	

		$product->name = $row["name"];	
				
		$product->descr = $row["descr"];	
				
		$product->persons_num = $row["persons_num"];
				
		$product->persons_num_book = $row["persons_num_book"];
		
		return $product; 
	}

	
	function addDepa( $req )
	{
			
			$quary = "insert into depa (name,descr,persons_num,persons_num_book)
			 values ('".$req->name."','".$req->descr."',".$req->persons_num.",".$req->persons_num_book.")";
	
			 mysql_query($quary);
			
	}
	
	function updatepersons_num( $id , $persons_num )
	{
			
		$quary = "update depa set persons_num=".$persons_num." where id=".$id;

			 mysql_query($quary);
			
	}
	
	function updatepersons_num_book( $id , $persons_num_book )
	{
			
		$quary = "update depa set persons_num_book=".$persons_num_book." where id=".$id;

			 mysql_query($quary);
			
	}

	
	function checkDepaCanDel( $id )
	{
				
		$quary = "select * from books where depa_id=".$id;

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
}

?>
