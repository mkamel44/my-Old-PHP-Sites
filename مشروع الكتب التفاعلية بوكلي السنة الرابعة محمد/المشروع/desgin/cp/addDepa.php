<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

if($addDepa != "" )
{

include("../../database/Connection.php");

include("../../database/depa/DepaDbase.php");

$db = new DepaDbase();

$std = new Depa();

$std->name = $name;

$std->descr = $descr;

$std->persons_num = 0;

$std->persons_num_book = 0;

$db->addDepa($std);
					
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
                        <td width="748" align="right" class="style1"><input name="name" id="name" dir="rtl"  type="text"  class="style2"></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">اسم القسم </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="descr" cols="50" rows="5" id="descr" class="style2" dir="rtl"></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">وصف القسم </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addDepa" id="addDepa" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  $("#addDepa").on('click', function (){
			  
					if($("#name").val() != "" && $("#descr").val() != "" )
					{
			$("#main_div").load("addDepa.php",{  name : $("#name").val() , descr : $("#descr").val()  ,addDepa : "done"  });
									 
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
                