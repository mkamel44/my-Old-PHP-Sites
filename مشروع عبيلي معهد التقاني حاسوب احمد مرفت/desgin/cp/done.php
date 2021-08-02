<?

extract($_REQUEST);

if($phones_done != "")
{

include("../../database/Connection.php");

include("../../database/phones/PhonesDbase.php");

$db = new PhonesDbase();

$phn = new Phones();

$phn->phones_id = $phones_id;

$phn->phones_done = $phones_done;

$phn->phones_date_of_res = date( 'Y-m-d H:i:s'); 

$phn->phones_units = $phones_units;

$phn->phones_card_id = $phones_card_id;

$all_amount = $db->getPhoneAmount($phn->phones_card_id);

if($phn->phones_done == "true")
{
	$result_ac = $all_amount - $phn->phones_units;
	
	if($result_ac > 0)
	{
		$db->updateCardsAmount( $phn->phones_card_id , $result_ac );		
	
		$db->updatePhoneDone( $phn );		
	}
	else
	{
		$phn->phones_done = "false";
	}
	
}

if($phn->phones_done == "false")
{
	$db->updatePhoneDone( $phn );
}

echo "done";
}
else
{
echo "no";
}

?>
