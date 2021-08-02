
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

include("../../database/cards/CardsDbase.php");
				
$card_db = new CardsDbase();

if($ShopID != "")
{
	$lolo = $card_db->getCardByID($ShopID);	
	
	$sum_all = $db->getSumAllBasketNotBuy($ShopID);
	
	$ss =  $lolo->remaining_balance + $sum_all;

	$card_db->updateCardRemaining_Balance($ShopID,$ss);
	
	$db->deleteBasketNotBuy($ShopID);	
?>
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="87" align="center" valign="middle" class="style1">تمت الحذف بنجاح </td>
  </tr>
</table>
<?
}

mysql_close();

?>