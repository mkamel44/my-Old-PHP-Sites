<?

extract($_REQUEST);

	include("database/Connection.php");
	
	include("database/comments/CommentsDbase.php");

	$db3 = new CommentsDbase();
		
	$db3->deleteComment($lolo);
	
	mysql_close();


?>
