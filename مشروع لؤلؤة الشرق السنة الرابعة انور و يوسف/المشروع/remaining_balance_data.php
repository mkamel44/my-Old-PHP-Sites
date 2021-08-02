<?

extract($_REQUEST);

if($card_id == "" ||  $card_id == -1 ||  $card_id == "-1")
{
	echo "no";
}
else
{

	include("database/Connection.php");
	
	include("database/cards/CardsDbase.php");
	
	$card_db = new CardsDbase();
	
	$lolo = $card_db->getCardByID($card_id);

	echo $lolo->remaining_balance;

	mysql_close();
	

}


?>