<?

extract($_REQUEST);

if($val != "")
{

include("../../database/Connection.php");

include("../../database/hotel/HotelDbase.php");

$db = new HotelDbase();

$all_amount = $db->updateHotelBookingYes($val,$val1);

echo "done";

}
else
{
echo "no";
}

?>
