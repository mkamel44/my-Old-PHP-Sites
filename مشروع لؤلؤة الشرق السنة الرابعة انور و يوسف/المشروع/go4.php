<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">نتيجة الشراء </td>
  </tr>
  
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/cards/CardsDbase.php");

$card_db = new CardsDbase();

include("database/basket/BasketDbase.php");

$db = new BasketDbase();

include("database/snacks/SnacksDbase.php");

$dba = new SnacksDbase();

$datetime = "0000-00-00 00:00:00";//date_create()->format('Y-m-d H:i:s');

	for($a1=0;$a1<count($snack_ids);$a1++)
	{
		$snack_id = $snack_ids[$a1];
		
		$aaa = $dba->getSnackByID($snack_id);
		
		$bas = new BasketData();
		
		$bas->card_id = $card_id;
		
		$bas->snack_name = $aaa->snack_name;
		
		$bas->snack_desc = $aaa->snack_desc;
		
		$bas->snack_price = $aaa->snack_price;
		
		$bas->booking_time = $datetime;
		
		$db->addBasketData($bas);
		
	}
	
	
	$lolo = $card_db->getCardByID($card_id);
	
	$all_new =  $lolo->remaining_balance - $mony;
	
	$card_db->updateCardRemaining_Balance($card_id,$all_new);

mysql_close();

?>
			<tr>
			  <td colspan="2" align="center" class="style435"><p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">تم الشراء بنجاح </p>
		        <p align="center">ان المشرف بانتظاركم لاستلام البضائع الخاصة بكم </p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p></td>
  </tr>  
</table>
<script>
snack_ids.length = 0;
snack_prices.length = 0;
</script>