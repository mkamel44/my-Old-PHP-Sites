<?

extract($_REQUEST);

include("database/Connection.php");

include("database/cards/CardsDbase.php");

$db = new CardsDbase();

$card = new Cards();

$card->cards_name =  $name_luk;

$card->cards_pass = md5( $pass_luk );

	if($db->checkCardsLuk($card) == true)
	{
		$db->updateCardsLuk($card->cards_id,"true");
	?>
<tr>
<td align="center" valign="middle" class="btn-success" style="font-size:18px">
تم فتح القفل</td>
</tr>
	<?

	}
	else
	{
	?>
<tr>
<td align="center" valign="middle" class="btn-danger" style="font-size:18px">
لا يوجد بطاقة بهذه المعلومات</td>
</tr>
	<?
	}
	
		mysql_close();
?>
