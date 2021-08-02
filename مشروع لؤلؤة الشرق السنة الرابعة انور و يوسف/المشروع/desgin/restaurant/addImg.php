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

include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();
			
$db->addImg($img,$a,$data);
					
					?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت الاضافة بنجاح </td>
				  </tr>
				</table>
				
				<?
	
				mysql_close();
				
				}
				
				?>
                <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="748" align="right" class="style1">
						<form id="uploadForm" action="upload.php" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="42%" align="right"><div id="targetLayer"></div></td>
							<td width="27%" align="right" valign="top"><input name="img" type="hidden" id="img" value="" />
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
											d = new Date();
											$("#targetLayer").html("<img  height='150px'  src='"+ data +"?"+ d.getTime() +"'  />");
											$("#img").val(data);
										},
										error: function() 
										{
										} 	        
								   });
								}));
							});
							</script>
						</form>							</td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">صورة  </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="data" class="style2" id="data" style="width:400px;height:200px" dir="rtl"><? echo $std->password; ?></textarea></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">النص</td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
					if( $("#img").val() != "" )
					{
					
						$("#main_div").load("addImg.php",{  img : $("#img").val() , data : $("#data").val() , a : <? echo $a; ?> , addsnack : "done"  });
									 
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
                