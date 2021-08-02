<?

extract($_REQUEST);

if($val != "")
{

include("../../database/Connection.php");

include("../../database/game_swimming/Game_SwimmingDbase.php");

$db = new Game_SwimmingDbase();

$all_amount = $db->updateGame_SwimmingBookingYes($val,$val1);

echo "done";

}
else
{
echo "no";
}

?>
