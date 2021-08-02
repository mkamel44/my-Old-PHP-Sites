<?

extract($_REQUEST);


	include("../../database/Connection.php");
	
	include("../../database/cards/CardsDbase.php");
	
	$db = new CardsDbase();
		
	$db->restCardsMsg($CardID);
	
	mysql_close();

?>
