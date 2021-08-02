<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

if($addwriters != "" )
{

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

$db = new WriterDbase();

$std = new Writer();

$std->name = $name;

$std->pass = $pass;

$std->details = $details;

$std->full_name = $full_name;

$std->pic = $pic;
			
$db->addWriter($std);
					
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

                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td align="right" class="style1"><input name="full_name" id="full_name" dir="rtl"  type="text"  class="style2"></td>
                    <td align="right" valign="top" class="style1">:</td>
                    <td align="right" valign="top" class="style1">الاسم الكامل للكاتب </td>
                  </tr>
                      <tr>
                        <td align="right" class="style1"><input name="name" id="name" dir="rtl"  type="text"  class="style2"></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">الاسم</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="pass" id="pass" dir="rtl"  type="text"  class="style2"  /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">كلمة السر </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="details" cols="50" rows="5" id="details" class="style2" dir="rtl"></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">تفاصيل الكاتب </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1">
						<form id="uploadForm" action="upload.php" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="42%" align="right"><div id="targetLayer"></div></td>
							<td width="27%" align="right" valign="top"><input name="pic" type="hidden" id="pic" value="" />
						    <input name="submit" type="submit" value="تحميل الصورة الكاتب" /></td>
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
											$("#pic").val(data);
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
                        <td align="right" valign="top" class="style1">صورة الكاتب </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
					if($("#full_name").val() != "" && $("#name").val() != ""  && $("#pass").val() != ""   && $("#details").val() != ""  && $("#pic").val() != "" )
					{
					
			$("#main_div").load("addWriters.php",{  full_name : $("#full_name").val() , name : $("#name").val() , pass : $("#pass").val(), details : $("#details").val() , pic : $("#pic").val() , addwriters : "done"  });
									 
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
                