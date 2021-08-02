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

include("../../database/cards/CardsDbase.php");

$db = new CardsDbase();

$std = new Cards();

$std->code = $code;

$std->password = $password;

$std->customer_name = $customer_name;

$std->balance = $balance;

$std->remaining_balance = $balance;
			
$db->addCard($std);
					
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
                        <td align="right" class="style1"><input name="code" id="code" dir="rtl"  type="text"  class="style2"></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">الكود</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="password" id="password" dir="rtl"  type="text"  class="style2" /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">الباسورد</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="customer_name" id="customer_name" dir="rtl"  type="text"  class="style2" /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">اسم الزبون </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="balance" id="balance" dir="rtl"  type="text"  class="style2" /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">الرصيد</td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                            <script type="text/javascript">
			  $("#addshop").on('click', function (){
			  
					if($("#code").val() != "" && $("#password").val() != "" && $("#balance").val() != "" )
					{
					$("#main_div").load("addCard.php",{  code : $("#code").val() , password : $("#password").val() , customer_name : $("#customer_name").val() , balance : $("#balance").val()  ,addCard : "done"  });
				 
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
                