<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

$products = $db->getAllBasketNotBuyByCard_id($card_id);

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">

 
  <tr>
    <td width="50%" align="center" valign="middle" class="style1">سعر البضاعة </td>
    <td width="50%" align="center" valign="middle" class="style1">اسم البضاعة </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><? echo $products_one->snack_price; ?></td>
    <td align="center" dir="rtl"  class="style1"><? echo $products_one->snack_name; ?></td>
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
						

						if(key == "deleteSnack.php")
						{
							 var result = confirm("هل انت متأكد من الحذف؟");
							if (result) {
										
									var path = $(tag_here).attr("path");

									$("#main_div").load(key,{ ShopID : val , path : path  });
									
												
							}

						}else
						if(key == "‫updateSncks.php")
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
mysql_close();
?>