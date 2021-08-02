<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depa/DepaDbase.php");

$db = new DepaDbase();

$products = $db->getDepas();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
 <tr>
    <td colspan="4" align="right" valign="middle" class="style1">
	<input style="width:100px" name="aa3" id="aa3" type="submit" class="style2" value="قسم جديد" />
	<script type="text/javascript">
			  $("#aa3").on('click', function (){
			 
					 $("#main_div").load("addDepa.php");
			  });
			</script>	</td>
  </tr>
  <tr>
    <td width="67%" align="center" valign="middle" class="style1">اسم القسم </td>
	 <td width="6%" align="center" valign="middle" class="style1">حذف</td>
	  <td width="6%" align="center" valign="middle" class="style1">تعديل</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><? echo $products_one->name; ?></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>" key="deleteDepa.php" onclick="call_click(this);" class="style1">حذف</a></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>" key="updateDepa.php" onclick="call_click(this);" class="style1">تعديل</a></td>
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
						

						if(key == "deleteDepa.php")
						{
							 var result = confirm("هل انت متأكد من الحذف؟");
							if (result) {

									$("#main_div").load(key,{ DepaID : val  });
												
							}

						}else
						if(key == "updateDepa.php")
						{
						
									$("#main_div").load(key,{ DepaID : val  });

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
    <td align="center" class="style1"><p>لا يوجد أقسام بعد</p>
      <p><input style="width:100px" name="aa333" id="aa333" type="submit" class="style2" value="قسم جديد" />
	<script type="text/javascript">
			  $("#aa333").on('click', function (){
			 
					 $("#main_div").load("addDepa.php");
			  });
			</script></p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>