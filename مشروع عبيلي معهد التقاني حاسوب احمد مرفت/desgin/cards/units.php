<?

extract($_REQUEST);

if($CardID == "" ||  $CardID == -1 ||  $CardID == "-1")
{
	echo "no";
}
else
{

	include("../../database/Connection.php");
	
	include("../../database/cards/CardsDbase.php");
	
	$db = new CardsDbase();
	
	$crd = $db->getCardsByID($CardID);

	if($db->checkCardsLukTrueByID($CardID) == true)
	{
		echo  "no";
	}
	else
	{
		echo $crd->cards_amount;
	}

	mysql_close();
	

}


?>