<?

extract($_REQUEST);

if($msg != "")
{

	include("../../database/Connection.php");
	
	include("../../database/cards/CardsDbase.php");
	
	$db = new CardsDbase();
		
	$old_msg =  $db->getCardsMsg($CardID);
	
	$old_msg2 = $msg."\n";
	
	$new_msg = $old_msg.$old_msg2;
	
	$db->updateCardsMsg($CardID,$new_msg);
	
	mysql_close();

}

?>
