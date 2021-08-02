<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/snacks/SnacksDbase.php");

$db = new SnacksDbase();

$std = new Snacks();

if($updateshop != ""  )
{

$std->snack_name = $snack_name;

$std->snack_desc = $snack_desc;

$std->snack_price = $snack_price;

$std->snack_id = $ShopID;

$db->updateSnack($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}


if($ShopID != "")
{
	$std = $db->getSnackByID($ShopID);
}


?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td width="757" align="right" class="kokoko"><input name="snack_name"  type="text" class="style2" id="snack_name" dir="rtl" value="<? echo $std->snack_name; ?>" /></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="192" align="right" valign="top" class="style1">اسم الوجبة </td>
      </tr>
      <tr>
        <td align="right" class="style1"><textarea name="snack_desc" cols="50" rows="5" id="snack_desc" class="style2" dir="rtl"><? echo $std->snack_desc; ?></textarea></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">وصف الوجبة </td>
      </tr>
      <tr>
        <td align="right" class="style1"><input name="snack_price"  type="text"  class="style2" id="snack_price" dir="rtl" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="<? echo $std->snack_price; ?>" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">سعر الوجبة </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if($("#snack_name").val() != "" && $("#snack_desc").val() != "" && $("#snack_price").val() != "")
					{

	$("#main_div").load("‫updateSncks.php",{  snack_name : $("#snack_name").val() , snack_desc : $("#snack_desc").val() , snack_price : $("#snack_price").val()  ,ShopID : <?  echo $ShopID;  ?> ,updateshop : "done"  });
									 
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
