<?

extract($_REQUEST);

include("database/Connection.php");

include("database/depa/DepaDbase.php");

include("database/books/BooksDbase.php");

$db = new BooksDbase();

$book = $db->getBookByID($book_id);

$db2 = new DepaDbase();

$depa = $db2->getDepaByID($depa_id);

if($aaa == "1")
{
	$num_pdf = $book->num_pdf + 1;
	
	$db->updateBook_num_pdf($book_id , $num_pdf );
}
else
if($aaa == "2")
{
	$num_word = $book->num_word + 1;
	
	$db->updateBook_num_word($book_id , $num_word );
}
else
if($aaa == "3")
{
	$num_details = $book->num_details + 1;
	
	$db->updateBook_num_details($book_id , $num_details );
	
	$persons_num_book = $depa->persons_num_book + 1;
	
	$db2->updatepersons_num_book($depa_id , $persons_num_book );
}
else
if($aaa == "4")
{
	$likes = $book->likes + 1;
	
	$db->updateBook_likes($book_id , $likes );
}
else
if($aaa == "5")
{
	$persons_num = $depa->persons_num + 1;
	
	$db2->updatepersons_num($depa_id , $persons_num );
}


	
mysql_close();

?>
