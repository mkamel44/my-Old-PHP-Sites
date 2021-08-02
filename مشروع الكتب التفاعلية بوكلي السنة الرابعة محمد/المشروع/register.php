<link href="css/style.css" rel="stylesheet" type="text/css">
<?

extract($_REQUEST);

if($addwriters != "" )
{

include("database/Connection.php");

include("database/writers/WriterDbase.php");

$db = new WriterDbase();

$std = new Writer();

$std->name = $name;

$std->pass = $pass;

$std->details = $details;

$std->full_name = $full_name;

$std->pic = $pic;
			
$db->addWriter($std);
	
$done_msg = "done";	
					
mysql_close();

}
				
				
				?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#7A0309">
                  <tr>
                    <td align="right" class="style3">تسجيل جديد  </td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><table width="100%" border="0" cellpadding="2" cellspacing="2">
				  <tr>
					<td height="120" align="right" valign="top" class="style34">
					<?
					if($done_msg != "")
					{
					?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="143" align="center" valign="middle" class="link_new" style="font-size:24px;text-align:center;">
					تم اشتراكك ككاتب <br />
					<br />
				    يمكنك الآن تسجيل الدخول
					</td>
				  </tr>
				</table>
				   <?   
				   }  
				   ?>
	
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td align="right" class="style5"><input name="full_name" id="full_name" dir="rtl"  type="text"  class="style4" /></td>
                        <td align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">الاسم الكامل للكاتب </td>
                      </tr>
                      <tr>
                        <td align="right" class="style5"><input name="name" id="name" dir="rtl"  type="text"  class="style4" /></td>
                        <td align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">الاسم</td>
                      </tr>
                      <tr>
                        <td align="right" class="style5"><input name="pass" id="pass" dir="rtl"  type="password"  class="style4"></td>
                        <td align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">كلمة السر </td>
                      </tr>
                      <tr>
                        <td align="right" class="style5"><textarea name="details" cols="50" rows="5" id="details" class="style4" dir="rtl"></textarea></td>
                        <td width="5" align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">تفاصيل الكاتب </td>
                      </tr>
                      <tr>
                        <td align="right" class="style5"><form id="uploadForm" action="upload.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="27%" align="right" valign="top"><input name="pic" type="hidden" id="pic" value="" />
                                    <input name="submit" type="submit" class="style4" value="تحميل الصورة الكاتب" /></td>
                                <td width="31%" align="right" valign="top"><input name="userImage" id="userImage" type="file" class="style4" dir="rtl" /></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="right" valign="top">
								<div id="targetLayer"></div>
								</td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm").on('submit',(function(e) {
									e.preventDefault();
									
																	
								if(jQuery('#userImage').val() == "")
								{
								 alert(" الرجاء التأكد من الملف ");
								 return false;
								}
								else
								{
								$.ajax({
										url: "upload.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											d = new Date();
											$("#targetLayer").html("<img  height='150px'  src='"+ data +"?"+ d.getTime() +"'  />");
											$("#pic").val(data);
										},
										error: function() 
										{
										} 	        
								   });			
								}
										   
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">صورة الكاتب </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input name="addshop" id="addshop" type="submit" class="style4" style="width:120px" value="تسجيل جديد" />
                            <script type="text/javascript">
			          </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
					if($("#full_name").val() != "" && $("#name").val() != ""  && $("#pass").val() != ""   && $("#details").val() != ""  && $("#pic").val() != "" )
					{
					
			$("#main_div").load("register.php",{  full_name : $("#full_name").val() , name : $("#name").val() , pass : $("#pass").val(), details : $("#details").val() , pic : $("#pic").val() , addwriters : "done"  });
									 
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
			  </td>
            </tr>
</table>
