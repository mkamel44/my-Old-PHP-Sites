
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

if($ShopID != "")
{
	$timret = date_create()->format('Y-m-d H:i:s');

	$db->updateAllBasketToBuy($ShopID,$timret);
?>
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="87" align="center" valign="middle" class="style1">تم الشراء بنجاح </td>
  </tr>
</table>
<?
}

mysql_close();

?>