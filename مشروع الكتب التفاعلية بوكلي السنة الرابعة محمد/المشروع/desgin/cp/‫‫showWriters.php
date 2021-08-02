<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

$db = new WriterDbase();

$products = $db->getWriters();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
<tr>
    <td colspan="4" align="right" valign="middle" class="style1"> 
	 <input style="width:100px" name="aa3" id="aa3" type="submit" class="style2" value="كاتب جديد" />
		<script type="text/javascript">
			  $("#aa3").on('click', function (){
			 
					 $("#main_div").load("addWriters.php");
			  });
			</script>		</td>
</tr>
 
  <tr>
    <td width="76%" align="center" valign="middle" class="style1">الكتّاب</td>
	 <td width="11%" align="center" valign="middle" class="style1">حذف</td>
	  <td width="13%" align="center" valign="middle" class="style1">تعديل</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><? echo $products_one->full_name; ?></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>"  path="<? echo $products_one->pic; ?>" key="deleteWriters.php" onclick="call_click(this);" class="style1">حذف</a></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>" key="updateWriters.php" onclick="call_click(this);" class="style1">تعديل</a></td>
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
						

						if(key == "deleteWriters.php")
						{
							 var result = confirm("هل انت متأكد من الحذف؟");
							if (result) {
										
									var path = $(tag_here).attr("path");

									$("#main_div").load(key,{ WriterID : val , path : path });
									
												
							}

						}else
						if(key == "updateWriters.php")
						{
						
									$("#main_div").load(key,{ WriterID : val  });

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
    <td align="center" class="style1"><p>لا يوجد كتّاب بعد</p>
      <p><input style="width:100px" name="aa333" id="aa333" type="submit" class="style2" value="كاتب جديد" />
	<script type="text/javascript">
			  $("#aa333").on('click', function (){
			 
					 $("#main_div").load("addWriters.php");
			  });
			</script></p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>