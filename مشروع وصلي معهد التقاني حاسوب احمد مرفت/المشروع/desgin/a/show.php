<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

include("../../database/snacks/SnacksDbase.php");

$dba = new SnacksDbase();

include("../../database/shops/ShopsDbase.php");

$dbaa = new ShopsDbase();

$products = $db->getAllBasketDatasByBasketID($basket_id);

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
   <tr>
     <td width="10%" align="center" valign="middle" class="style1">الكلفة</td>
     <td width="31%" align="center" valign="middle" class="style1">المحل</td>
     <td width="59%" align="center" valign="middle" class="style1">اسم الوجبة </td>
  </tr>
    <?
 $iii = 0;
	
 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
  
  $snk = $dba->getSnackByID($products_one->snack_id);
  
  $sho = $dbaa->getShopByID($snk->snack_shop_id);
  
  $iii = $snk->snack_price + $iii;
    ?>
  <tr>
    <td align="center"  class="style1" dir="rtl"><? echo $snk->snack_price; ?></td>
    <td align="center"  class="style1" dir="rtl"><? echo $sho->shop_name; ?></td>
    <td align="center"  class="style1" dir="rtl"><? echo $snk->snack_name; ?></td>
  </tr>

  <?

}

?> 
</table>
<table width="100%" border="1" bordercolor="#FF0000" id="example">
   <tr>
     <td width="50%" align="center" valign="middle" class="style1"><? echo $iii; ?></td>
     <td width="50%" align="center" valign="middle" class="style1">المجموع</td>
  </tr>
</table>
<?
}
else
{
?>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p>لا يوجد الوجبات بعد</p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>