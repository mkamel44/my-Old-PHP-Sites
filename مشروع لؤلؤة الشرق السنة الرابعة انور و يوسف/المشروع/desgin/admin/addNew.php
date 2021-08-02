<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

if($addCard != "" )
{

include("../../database/Connection.php");

include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();

			
$db->addNew($title,$data);
					
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
                        <td align="right" class="style1"><input name="title" id="title" dir="rtl"  type="text"  class="style2"></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">العنوان</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="data" class="style2" id="data" dir="rtl" style="width:400px;height:200px"></textarea></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">النص</td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  $("#addshop").on('click', function (){
			  
					if($("#title").val() != "" && $("#data").val() != ""  )
					{
					$("#main_div").load("addNew.php",{  title : $("#title").val() , data : $("#data").val()  ,addCard : "done"  });
				 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			          </script>                        </td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                