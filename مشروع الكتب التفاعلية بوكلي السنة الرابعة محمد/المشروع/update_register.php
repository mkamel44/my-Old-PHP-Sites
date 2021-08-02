<link href="css/style.css" rel="stylesheet" type="text/css">
<?
session_start();

extract($_REQUEST);

if($addwriters != "" )
{

include("database/Connection.php");

include("database/writers/WriterDbase.php");

$db = new WriterDbase();

$std = new Writer();

$std->name = $name;

$std->pass = $pass;

$std->id = $_SESSION["login_writer_data"];
			
$db->updateNamePass($std);
	
$done_msg = "done";	
					
mysql_close();

}
				
				
				?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#7A0309">
                  <tr>
                    <td align="right" class="style3">تعديل الملف الشخصي </td>
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
					<td height="63" align="center" valign="middle" class="link_new" style="font-size:24px;text-align:center;">
					تم تعديل البيانات </td>
				  </tr>
				</table>
				   <?   
				   }  
				   ?>
	
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td align="right" class="style5"><input name="name" id="name" dir="rtl"  type="text"  class="style4" /></td>
                        <td width="5" align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">الاسم</td>
                      </tr>
                      <tr>
                        <td align="right" class="style5"><input name="pass" id="pass" dir="rtl"  type="password"  class="style4"></td>
                        <td align="right" valign="top" class="style5">:</td>
                        <td align="right" valign="top" class="link_new">كلمة السر </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input name="addshop" id="addshop" type="submit" class="style4" style="width:120px" value="تعديل" />
                            <script type="text/javascript">
			          </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
											if( $("#name").val() != ""  && $("#pass").val() != "" )
											{
											
									$("#main_div").load("update_register.php",{ name : $("#name").val() , pass : $("#pass").val() , addwriters : "done"  });
															 
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
