<?php

include("Book.php");

class BooksDbase
{
	function deleteBook($id_c)
	{
		$quary = "delete from books where id=".$id_c;		
		
		mysql_query($quary);
	}
	
	function getBooks()
	{
			
			$products = array();
					
			$query = "select * from books where agree='true' order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->depa_id = $row["depa_id"];	
				
				$product->writer_id = $row["writer_id"];	
				
				$product->address = $row["address"];
				
				$product->details = $row["details"];
				
				$product->pdf = $row["pdf"];	
				
				$product->word = $row["word"];	
				
				$product->num_details = $row["num_details"];	
				
				$product->num_pdf = $row["num_pdf"];	
				
				$product->num_word = $row["num_word"];	
				
				$product->likes = $row["likes"];	
				
				$product->agree = $row["agree"];			
				
				$product->pic1 = $row["pic1"];		
				
				$product->pic2 = $row["pic2"];		
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getAllBooksINGroups($writer_id)
	{
			
			$products = array();
					
			$query = "select * from group_writer where writer_id=".$writer_id." order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->depa_id = $row["group_id"];	
				
				$product->writer_id = $row["writer_id"];			
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getGroupByID($group_id)
	{
			
		$product = new Book();
				
		$query = "select * from groups where id=".$group_id;

		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
				$product->id = $row["id"];	

				$product->depa_id = $row["book_id"];			
		
		return $product; 
	}
	
	function getAllBooksByDepa($depa_id)
	{
			
			$products = array();
					
			$query = "select * from books where agree='true' and depa_id=".$depa_id." order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->depa_id = $row["depa_id"];	
				
				$product->writer_id = $row["writer_id"];	
				
				$product->address = $row["address"];
				
				$product->details = $row["details"];
				
				$product->pdf = $row["pdf"];	
				
				$product->word = $row["word"];	
				
				$product->num_details = $row["num_details"];	
				
				$product->num_pdf = $row["num_pdf"];	
				
				$product->num_word = $row["num_word"];	
				
				$product->likes = $row["likes"];	
				
				$product->agree = $row["agree"];			
				
				$product->pic1 = $row["pic1"];		
				
				$product->pic2 = $row["pic2"];		
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getAllBooksByWriters($writer_id)
	{
			
			$products = array();
					
			$query = "select * from books where agree='true' and writer_id=".$writer_id." order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->depa_id = $row["depa_id"];	
				
				$product->writer_id = $row["writer_id"];	
				
				$product->address = $row["address"];
				
				$product->details = $row["details"];
				
				$product->pdf = $row["pdf"];	
				
				$product->word = $row["word"];	
				
				$product->num_details = $row["num_details"];	
				
				$product->num_pdf = $row["num_pdf"];	
				
				$product->num_word = $row["num_word"];	
				
				$product->likes = $row["likes"];	
				
				$product->agree = $row["agree"];			
				
				$product->pic1 = $row["pic1"];		
				
				$product->pic2 = $row["pic2"];		
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function getBooksNotTrueEyt()
	{
			
			$products = array();
					
			$query = "select * from books where agree='false' order by id desc";
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];	

				$product->depa_id = $row["depa_id"];	
				
				$product->writer_id = $row["writer_id"];	
				
				$product->address = $row["address"];
				
				$product->details = $row["details"];
				
				$product->pdf = $row["pdf"];	
				
				$product->word = $row["word"];	
				
				$product->num_details = $row["num_details"];	
				
				$product->num_pdf = $row["num_pdf"];	
				
				$product->num_word = $row["num_word"];	
				
				$product->likes = $row["likes"];	
				
				$product->agree = $row["agree"];			
				
				$product->pic1 = $row["pic1"];		
				
				$product->pic2 = $row["pic2"];		
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function updateBook( $req )
	{
			
		$quary = "update books set depa_id=".$req->depa_id.",writer_id=".$req->writer_id.",address='".$req->address."',details='".$req->details."' where id=".$req->id;

			 mysql_query($quary);
			
	}
	
	function updateBook_num_pdf( $id , $num_pdf )
	{
			
		$quary = "update books set num_pdf=".$num_pdf." where id=".$id;

			 mysql_query($quary);
			
	}
	
	function updateBook_num_word( $id , $num_word )
	{
			
		$quary = "update books set num_word=".$num_word." where id=".$id;

			 mysql_query($quary);
			
	}
	
	function updateBook_num_details( $id , $num_details )
	{
			
		$quary = "update books set num_details=".$num_details." where id=".$id;

			 mysql_query($quary);
			
	}
	
	
	function updateBook_likes( $id , $likes )
	{
			
		$quary = "update books set likes=".$likes." where id=".$id;

			 mysql_query($quary);
			
	}
	
	function updateBookAgee( $book_id , $agree )
	{
			
		$quary = "update books set agree='".$agree."' where id=".$book_id;

			 mysql_query($quary);
			
	}

	
	function  getBookByID($id)
	{
			
		$product = new Book();
				
		$query = "select * from books where id=".$id;
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);			
		
				$product->id = $row["id"];	

				$product->depa_id = $row["depa_id"];	
				
				$product->writer_id = $row["writer_id"];	
				
				$product->address = $row["address"];
				
				$product->details = $row["details"];
				
				$product->pdf = $row["pdf"];	
				
				$product->word = $row["word"];	
				
				$product->num_details = $row["num_details"];	
				
				$product->num_pdf = $row["num_pdf"];	
				
				$product->num_word = $row["num_word"];	
				
				$product->likes = $row["likes"];	
				
				$product->agree = $row["agree"];		
				
				$product->pic1 = $row["pic1"];		
				
				$product->pic2 = $row["pic2"];		
		
		return $product; 
	}

	
	function addBook( $req )
	{
			
			$quary = "insert into books (depa_id,writer_id,address,details,pdf,word,num_details,num_pdf,num_word,likes,agree,pic1,pic2)
			 values (".$req->depa_id.",".$req->writer_id.",'".$req->address."','".$req->details."','".$req->pdf."','".$req->word."',".$req->num_details.",".$req->num_pdf.",".$req->num_word.",".$req->likes.",'".$req->agree."','".$req->pic1."','".$req->pic2."')";

			 mysql_query($quary);
			 
			 return mysql_insert_id();
			
	}
	
	function addGroups( $book_id )
	{
			
			$quary = "insert into groups (book_id)
			 values (".$book_id.")";
		
			 mysql_query($quary);
			 
			 return mysql_insert_id();
			
	}
	
	function addGroup_writer( $group_id , $writer_id )
	{
			
			$quary = "insert into group_writer (group_id,writer_id)
			 values (".$group_id.",".$writer_id.")";
		
			 mysql_query($quary);
			
	}
	
	
	function addBook_r( $id , $writer_id )
	{
			
			$quary = "insert into book_r (book_id,writer_id)
			 values (".$id.",".$writer_id.")";
		
			 mysql_query($quary);
			
	}
	
	function getBook_rs($book_id)
	{
			
			$products = array();
					
			$query = "select * from book_r where book_id=".$book_id;
		
			$result = mysql_query($query);
	
			$num_results = mysql_num_rows($result);
					
			for ($i=0; $i < $num_results; $i++)
			{
				$product = new Book();
				
				$row = mysql_fetch_array($result);	
			
				$product->id = $row["id"];		
				
				$product->writer_id = $row["writer_id"];		
	
				$products[$i] = $product;
	
			}
			   
	  return $products; 
	}
	
	function deleteBook_rs($book_id)
	{
		$quary = "delete from book_r where book_id=".$book_id;		
		
		mysql_query($quary);
	}
}

?>
