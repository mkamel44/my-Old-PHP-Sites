<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?


extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$db = new CardsDbase();

$products = $db->getCards();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
 <tr>
    <td colspan="5" align="right" valign="middle" class="style1">
	<input style="width:100px" name="aa3" id="aa3" type="submit" class="style2" value="كرت جديد" />
	<script type="text/javascript">
			  $("#aa3").on('click', function (){
			 
					 $("#main_div").load("addCard.php");
			  });
			</script>	</td>
  </tr>
  <tr>
    <td width="26%" align="center" valign="middle" class="style1">الكود</td>
	<td width="21%" align="center" valign="middle" class="style1">الرصيد</td>
		<td width="22%" align="center" valign="middle" class="style1">الرصيد المتبقي</td>
     <td width="25%" align="center" valign="middle" class="style1">اسم الزبون </td>
	    <td width="6%" align="center" valign="middle" class="style1">تعديل</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style2"><? echo $products_one->code; ?></td>
	    <td align="center" dir="rtl"  class="style2"><? echo $products_one->balance; ?></td>
		    <td align="center" dir="rtl"  class="style2"><? echo $products_one->remaining_balance; ?></td>
	    <td align="center" dir="rtl"  class="style2"><? echo $products_one->customer_name; ?></td>
	<td align="center" class="style2" ><a href="#" val="<? echo $products_one->id; ?>" key="updateCard.php" onclick="call_click(this);" class="style2">تعديل</a></td>
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
						

						if(key == "updateCard.php")
						{
						
									$("#main_div").load(key,{ CardID : val  });

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
    <td align="center" class="style1"><p>لا يوجد بطاقات بعد</p>
      <p><input style="width:100px" name="aa333" id="aa333" type="submit" class="style2" value="كرت جديد" />
	<script type="text/javascript">
			  $("#aa333").on('click', function (){
			 
					 $("#main_div").load("addCard.php");
			  });
			</script></p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>