<?
extract($_REQUEST);


	include("../../database/Connection.php");
	
	include("../../database/cards/CardsDbase.php");
	
	$db = new CardsDbase();
	
	$msg =  $db->getCardsMsg($CardID);

	echo $msg;

	mysql_close();

?>