<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

$products = $db->getAllBaskets();

if(count($products) != 0)
{

?>
<script>
document.getElementById('xyz').play();
</script>
<table width="100%" border="1" bordercolor="#FF0000" id="example">
   <tr>
     <td width="10%" align="center" valign="middle" class="style1">الوجبات</td>
     <td width="69%" align="center" valign="middle" class="style1">العنوان</td>
    <td width="15%" align="center" valign="middle" class="style1">رقم الموبايل </td>
	 <td width="6%" align="center" valign="middle" class="style1">حذف</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center"  class="style1" dir="rtl"><a href="#" onclick="PopupCenter('show.php?basket_id=<? echo $products_one->basket_id; ?>','الطلبات',500,300);" class="style1">عرض الوجبات </a></td>
    <td align="right" valign="top"  class="style1" dir="rtl"><? echo $products_one->basket_addr; ?></td>
    <td align="center" dir="rtl"  class="style1"><? echo $products_one->basket_mob; ?></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->basket_id; ?>" onclick="call_click(this);" class="style2">حذف</a></td>
  </tr>

  <?

}

?> 
</table>

<script>
function call_click(tag_here)
	{

						var val = $(tag_here).attr("val");
						
					//	var result = confirm("هل انت متأكد من الحذف؟");
						
							//if (result) {

									$.ajax({
									 url: "del.php", 
									 data: { 
										basket_id : val 
										   },
											 success: function(result)
											 {
												
											 }
										  });
												
									 //  }

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
    <td align="center" class="style1"><p>لا يوجد طلبات بعد</p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>