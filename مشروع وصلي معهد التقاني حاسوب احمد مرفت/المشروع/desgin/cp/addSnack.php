<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

if($addsnack != "" )
{

include("../../database/Connection.php");

include("../../database/snacks/SnacksDbase.php");

$db = new SnacksDbase();

$std = new Snacks();

$std->snack_name = $snack_name;

$std->snack_desc = $snack_desc;

$std->snack_price = $snack_price;

$std->snack_pic = $snack_pic;

$std->snack_shop_id = $ShopID;
			
$db->addSnack($std);
					
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
                        <td width="748" align="right" class="style1"><input name="snack_name" id="snack_name" dir="rtl"  type="text"  class="style2"></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">اسم الوجبة </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="snack_desc" cols="50" rows="5" id="snack_desc" class="style2" dir="rtl"></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">وصف الوجبة </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="snack_price" id="snack_price" dir="rtl"  type="text"  class="style2" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">سعر الوجبة </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1">
						<form id="uploadForm" action="upload.php" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="42%" align="right"><div id="targetLayer"></div></td>
							<td width="27%" align="right" valign="top"><input name="snack_pic" type="hidden" id="snack_pic" value="" />
						    <input name="submit" type="submit" value="تحميل الصورة" /></td>
							<td width="31%" align="right" valign="top"><input dir="rtl" name="userImage" type="file" /></td>
						  </tr>
						</table>
						<script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm").on('submit',(function(e) {
									e.preventDefault();
									$.ajax({
										url: "upload.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											$("#targetLayer").html("<img src='"+ data +"'  />");
											$("#snack_pic").val(data);
										},
										error: function() 
										{
										} 	        
								   });
								}));
							});
							</script>
						</form>							</td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">صورة الوجبة </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
					if($("#snack_name").val() != "" && $("#snack_desc").val() != ""  && $("#snack_price").val() != ""   && $("#snack_pic").val() != "" )
					{
					
			$("#main_div").load("addSnack.php",{  snack_name : $("#snack_name").val() , snack_desc : $("#snack_desc").val() , snack_price : $("#snack_price").val(), snack_pic : $("#snack_pic").val() , ShopID : <? echo $ShopID; ?> , addsnack : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			                </script></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                