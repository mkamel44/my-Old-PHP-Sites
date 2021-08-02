<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$dba = new CardsDbase();

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

$products = $db->getAllBasketNotBuy();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">

  <tr>
      <td width="16%" align="center" valign="middle" class="style1">عرض البضائع </td>
    <td width="70%" align="center" valign="middle" class="style1">اسماء الزبائن </td>
	 <td width="6%" align="center" valign="middle" class="style1">حذف</td>
	  <td width="8%" align="center" valign="middle" class="style1">تم الشراء </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><a href="#" onclick="PopupCenter('show.php?card_id=<? echo $products_one->card_id; ?>','تفاصيل البضائع',600,300);" class="style2">عرض البضائع</a></td>
    <td align="center" dir="rtl"  class="style1"><? 
	
	$rrr = $dba->getCardByID($products_one->card_id);
	
	echo $rrr->customer_name;
	
	 ?></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->card_id; ?>"  key="deleteBasket.php" onclick="call_click(this);" class="style2">حذف</a></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->card_id; ?>" key="updateBasket.php" onclick="call_click(this);" class="style2">تم الشراء </a></td>
  </tr>

  <?

}

?> 
</table>

<script>
function call_click(tag_here)
	{

						var val = $(tag_here).attr("val");
						var key = $(tag_here).attr("key");
						

						if(key == "deleteBasket.php")
						{
							 var result = confirm("هل انت متأكد من الحذف؟");
							if (result) {
										
									var path = $(tag_here).attr("path");

									$("#main_div").load(key,{ ShopID : val , path : path  });
									
												
							}

						}else
						if(key == "updateBasket.php")
						{
						
									$("#main_div").load(key,{ ShopID : val  });

						}

		}
</script>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="num">
  <tr>
    <td height="32" align="center" valign="middle">&nbsp;</td>
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
    <td align="center" class="style1">لا يوجد بضائع مباعة </td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>