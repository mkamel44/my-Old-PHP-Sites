<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/admin/AdminDbase.php");

$db = new AdminDbase();

if($updateshop != ""  )
{

$db->updatea($aa,$aaa);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}
if($aa != "")
{
	$std = $db->geta($aa);
}
else
{
$aa = 3;
$std = $db->geta($aa);
}

?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="747" align="right" class="kokoko"><span class="bg-danger">
      <select name="aa" id="aa" style="width:155px" dir="rtl">
        <option value="3" <? echo ($aa == "3" ?  "selected" : ""); ?>>الصفحة الرئيسية</option>
        <option value="4" <? echo ($aa == "4" ?  "selected" : ""); ?>>من نحن</option>
		 <option value="5" <? echo ($aa == "5" ?  "selected" : ""); ?>>فريق العمل</option>
		 <option value="6" <? echo ($aa == "6" ?  "selected" : ""); ?>>سرعة التوصيل</option>
      </select>
	   <script type="text/javascript">
	   $('#aa').change(function() {
 		$("#main_div").load("‫updatea.php",{   aa : $("#aa").val()  });
 		});
	   </script>
    </span></td>
    <td width="34" align="right" valign="top" class="style1">:</td>
    <td width="163" align="right" valign="top" class="style1">الصفحة </td>
  </tr>
      <tr>
        <td align="right" class="kokoko"><textarea name="aaa" class="style2" id="aaa" dir="rtl" style="width:400px;height:200px"><? echo $std ; ?></textarea></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">النص</td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if( $("#aaa").val() != "" )
					{

						$("#main_div").load("‫updatea.php" , {  aaa : $("#aaa").val()  , aa : $("#aa").val() , updateshop : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			</script>        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();

?>
