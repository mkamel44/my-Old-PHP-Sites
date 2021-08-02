<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

if($addshop != "" )
{

include("../../database/Connection.php");

include("../../database/shops/ShopsDbase.php");

$db = new ShopsDbase();

$std = new Shops();

$std->shop_name = $shop_name;

$std->shop_place = $shop_place;

			
					$db->addShop($std);
					
					?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت الاضافة بنجاح </td>
				  </tr>
				</table>
				
				<?
	
				mysql_close();
				
				}
				else
				{
				?>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">الرجاء التأكد من المدخلات </td>
				  </tr>
				</table>
				
				<?
				}
				
				
				?>

                <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="748" align="right" class="style1"><input name="shop_name" id="shop_name" dir="rtl"  type="text"  class="style2"></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">اسم المحل </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="shop_place" cols="50" rows="5" id="shop_place" class="style2" dir="rtl"></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">مكان المحل </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  $("#addshop").on('click', function (){
			  
					if($("#shop_name").val() != "" && $("#shop_place").val() != "" )
					{
			$("#main_div").load("addShop.php",{  shop_name : $("#shop_name").val() , shop_place : $("#shop_place").val()  ,addshop : "done"  });
									 
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
                