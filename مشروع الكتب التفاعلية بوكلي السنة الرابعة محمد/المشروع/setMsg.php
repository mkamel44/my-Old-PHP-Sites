<?

extract($_REQUEST);

if($msg != "")
{

	include("database/Connection.php");
	
	include("database/comments/CommentsDbase.php");

	$db3 = new CommentsDbase();
		
	$std = new Comments();

	$std->writer_id = $writer_id;
	
	$std->book_id = $book_id;
	
	$std->comment = $msg;
		
	$db3->addComment($std);
	
	mysql_close();

}

?>
