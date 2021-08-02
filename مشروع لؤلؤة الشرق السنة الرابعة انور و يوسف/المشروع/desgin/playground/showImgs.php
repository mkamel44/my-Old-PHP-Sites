<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");


include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();

$products = $db->getImgs($a);

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
<tr>
    <td colspan="4" align="right" valign="middle" class="style1"><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td width="50%" align="left">
		  <input style="width:100px" name="aa3" id="aa3" type="submit" class="style2" value="صورة جديدة" />
		<script type="text/javascript">
			  $("#aa3").on('click', function (){
			 
					 $("#main_div").load("addImg.php",{a : <? echo $a; ?>});
			  });
			</script>		</td>
        <td width="50%" align="right" class="style1">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td width="76%" align="center" valign="middle" class="style1">الصورة</td>
	 <td width="11%" align="center" valign="middle" class="style1">تعديل</td>
	 <td width="11%" align="center" valign="middle" class="style1">حذف</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"> <img src="<? echo $products_one->name; ?>"  height="150px" /></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>" onclick="call_click2(this);" class="style2">تعديل</a></td>
	<td align="center" class="style1" ><a href="#" val="<? echo $products_one->id; ?>"  path="<? echo $products_one->name; ?>" onclick="call_click(this);" class="style2">حذف</a></td>
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
						

						
							 var result = confirm("هل انت متأكد من الحذف؟");
							if (result) {
										
									var path = $(tag_here).attr("path");
									
									var val = $(tag_here).attr("val");

									$("#main_div").load("deleteImg.php",{ val : val , path : path ,a : <? echo $a; ?> });
									
												
							}

						

		}
		
	function call_click2(tag_here)
	{

						var val = $(tag_here).attr("val");
						
						$("#main_div").load("updateImg.php",{ CardID : val });
						
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
    <td align="center" class="style1"><p>لا يوجد صور بعد</p>
      <p><input style="width:100px" name="aa333" id="aa333" type="submit" class="style2" value="صورة جديدة" />
	<script type="text/javascript">
			  $("#aa333").on('click', function (){
			 
					 $("#main_div").load("addImg.php",{a : <? echo $a; ?>});
			  });
			</script></p></td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>