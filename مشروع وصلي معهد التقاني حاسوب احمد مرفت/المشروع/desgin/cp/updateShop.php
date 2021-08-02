<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/shops/ShopsDbase.php");

$db = new ShopsDbase();

$std = new Shops();

if($updateshop != ""  )
{

$std->shop_id = $ShopID;

$std->shop_name = $shop_name;

$std->shop_place = $shop_place;

$db->updateShop($std);
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
	$std = $db->getShopByID($ShopID);
}


?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td width="757" align="right" class="kokoko"><input name="shop_name"  type="text" class="style2" id="shop_name" dir="rtl" value="<? echo $std->shop_name; ?>" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">اسم المحل </td>
      </tr>
      <tr>
        <td align="right" class="kokoko"><textarea name="shop_place" cols="50" rows="5" class="style2" id="shop_place" dir="rtl"><? echo $std->shop_place; ?></textarea></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="192" align="right" valign="top" class="style1">مكان المحل </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if($("#shop_name").val() != "" && $("#shop_place").val() != "")
					{

	$("#main_div").load("updateShop.php",{  shop_name : $("#shop_name").val() , shop_place : $("#shop_place").val()  ,ShopID : <?  echo $ShopID;  ?> ,updateshop : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			</script>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();

?>
