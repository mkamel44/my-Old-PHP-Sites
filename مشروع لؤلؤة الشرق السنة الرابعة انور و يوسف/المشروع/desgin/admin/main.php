<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();


if($upall != "" )
{

$fff = new Supervisor();

$fff->id = $ss;

$fff->name = $img;

$fff->password = $data;

$db->updateSupervisor($fff);
					
					?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تم التعديل بنجاح </td>
				  </tr>
				</table>
				
				<?
}

$wwww = $db->getSupervisor($ss);
				?>
                <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="748" align="right" valign="middle" class="style1">
						<form id="uploadForm" action="upload.php" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="42%" align="right" valign="middle"><div id="targetLayer">
							<img  height='150px'  src="<? echo $wwww->name; ?>"  />
							</div></td>
							<td width="27%" align="right" valign="middle"><input name="img" type="hidden" id="img" value="<? echo $wwww->name; ?>" />
						    <input name="submit" type="submit" value="تحميل الصورة" /></td>
							<td width="31%" align="right" valign="middle"><input dir="rtl" name="userImage" type="file" /></td>
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
										error: function(data) 
										{
											alet(data);
										} 	        
								   });
								}));
							});
							</script>
						</form>							</td>
                        <td width="5" align="right" valign="middle" class="style1">:</td>
                        <td align="right" valign="middle" class="style1">صورة  </td>
                      </tr>
					  <tr>
                        <td width="748" align="right" class="style1">                         
                          <textarea name="data" class="style2" id="data" dir="rtl" style="width:400px;height:200px"><? echo $wwww->password; ?></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">النص  </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="upall" id="upall" type="submit" class="style2" value="تعديل" />
                            <script type="text/javascript">
			  </script>
                            <script type="text/javascript">$("#upall").on('click', function (){
			  
					if( $("#img").val() != "" &&  $("#data").val() != "" )
					{
					
						$("#main_div").load("main.php",{  img : $("#img").val() , data : $("#data").val() , ss : <? echo $ss; ?> , upall : "done"  });
									 
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
<?
mysql_close();
?>           