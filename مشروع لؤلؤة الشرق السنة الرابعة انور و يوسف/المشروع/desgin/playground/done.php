<?

extract($_REQUEST);

if($val != "")
{

include("../../database/Connection.php");

include("../../database/playground/PlayGroundDbase.php");

$db = new PlayGroundDbase();

$all_amount = $db->updatePlayGroundBookingYes($val,$val1);

echo "done";

}
else
{
echo "no";
}

?>
