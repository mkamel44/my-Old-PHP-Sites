<?php

include("Comments.php");

class CommentsDbase
{
	function deleteComment($id_c)
	{
		$quary = "delete from comments where id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function deleteComment2($id_c)
	{
		$quary = "delete from group_comments where id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getComments($book_id)
	{
			
			$products = array();
					
			$query = "select * from comments where book_id=".$book_id." order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Comments();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->writer_id = $row["writer_id"];	
				
				$product->book_id = $row["book_id"];	
				
				$product->comment = $row["comment"];
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getComments2($group_id)
	{
			
			$products = array();
					
			$query = "select * from group_comments where group_id=".$group_id." order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Comments();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->writer_id = $row["writer_id"];	
				
				$product->book_id = $row["group_id"];	
				
				$product->comment = $row["comment"];
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}


	
	function addComment( $req )
	{
			
			$quary = "insert into comments (writer_id,book_id,comment)
			 values (".$req->writer_id.",".$req->book_id.",'".$req->comment."')";
	
			 mysql_query($quary);
			
	}
	
	function addComment2( $req )
	{
			
			$quary = "insert into group_comments (writer_id,group_id,comment)
			 values (".$req->writer_id.",".$req->book_id.",'".$req->comment."')";
	
			 mysql_query($quary);
			
	}
	
}

?>
