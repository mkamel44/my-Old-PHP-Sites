<?php

include("Teachars.php");

class TeacharsDbase
{

function addTeachar( $students )
{
		
		$quary = "insert into teachars (name,pass,fname,lname,phone,mobile,dgree,about)
		 values ('".$students->name."','".$students->pass."','".$students->fname."','".$students->lname."','".$students->phone."','".$students->mobile."','".$students->dgree."','".$students->about."')";

		 
		 
		 mysql_query($quary);
		
}

function updateTeachar( $students )
{
		
		$quary = "update teachars set name='".$students->name."',pass='".$students->pass."',fname='".$students->fname."',lname='".$students->lname."',phone='".$students->phone."',mobile='".$students->mobile."',dgree='".$students->dgree."',about='".$students->about."' where id=".$students->id;
		 
		 mysql_query($quary);
		
}



function getAllTeachars()
{
		
$products = array();
		
$query = "select * from teachars ORDER BY id desc";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);
		
for ($i=0; $i < $num_results; $i++)
{
			$product = new Teachars();
			
			$row = mysql_fetch_array($result);			
			
			$product->id = $row["id"];	
			
			$product->name = $row["name"];			
			
			$product->pass = $row["pass"];
			
			$product->fname = $row["fname"];			
			
			$product->lname = $row["lname"];
		
			$product->phone = $row["phone"];
			
			$product->mobile = $row["mobile"];
			
			$product->dgree = $row["dgree"];
			
			$product->about= $row["about"];

			$products[$i] = $product;

}
		   
  return $products; 
}


function deleteTeachar($id)
{

$quary = "delete from teachars where id=".$id;		
		 mysql_query($quary);

}


function getTeacharssCount()
{
$query = "select count(id) as lolo from teachars";

$result = mysql_query($query);

$row = mysql_fetch_array($result);			

$count = $row["lolo"];	

return $count;

}

function getTeachar($id)
{
		
$product = new Teachars();
		
$query = "select * from teachars where id=".$id;

$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

			$product->id = $row["id"];	

			$product->name = $row["name"];			
			
			$product->pass = $row["pass"];

			$product->fname = $row["fname"];			

			$product->lname = $row["lname"];
		
			$product->phone = $row["phone"];

			$product->mobile = $row["mobile"];

			$product->dgree = $row["dgree"];

			$product->about= $row["about"];
 	   
		  return $product; 
}

function checkTeachar($name , $pass)
{

		
$query = "select * from teachars where name='".$name."' and pass='".$pass."'";

$result = mysql_query($query);

	$row = mysql_fetch_array($result);			

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


function getTeacharAs($name , $pass)
{

		
	$query = "select * from teachars where name='".$name."' and pass='".$pass."'";
	
	$result = mysql_query($query);

	$row = mysql_fetch_array($result);			
		
	return $row["id"];
}



}

?>