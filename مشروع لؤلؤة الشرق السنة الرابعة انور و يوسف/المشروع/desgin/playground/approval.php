<?

extract($_REQUEST);

if($val != "")
{

include("../../database/Connection.php");

include("../../database/playground/PlayGroundDbase.php");

$db = new PlayGroundDbase();

$all_amount = $db->updatePlayGroundBooking($val,$val1);

echo "done";


			if($val1 == "false")
			{
			
				include("../../database/cards/CardsDbase.php");
				
				$card_db = new CardsDbase();

				$lolo = $card_db->getCardByID($val3);

				$ss =  $lolo->remaining_balance + $val2;

				$card_db->updateCardRemaining_Balance($val3,$ss);
			}
			
mysql_close();

}
else
{
echo "no";
}

?>
