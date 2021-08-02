<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$db = new CardsDbase();

$std = new Cards();

if($updateCard != ""  )
{

$std->id = $id;

$std->code = $code;

$std->password = $password;

$std->customer_name = $customer_name;

$db->updateCard($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}


if($CardID != "")
{
	$std = $db->getCardByID($CardID);
}


?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td align="right" class="style1"><input name="code"  type="text"  class="style2" id="code" dir="rtl" value="<? echo $std->code; ?>" /></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="192" align="right" valign="top" class="style1">الكود</td>
      </tr>
      <tr>
        <td align="right" class="style1"><input name="password" id="password" dir="rtl"  type="text"  class="style2" value="<? echo $std->password; ?>" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">الباسورد</td>
      </tr>
      <tr>
        <td align="right" class="style1"><input name="customer_name" id="customer_name" dir="rtl"  type="text"  class="style2" value="<? echo $std->customer_name; ?>" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">اسم الزبون </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if($("#code").val() != "" && $("#password").val() != "")
					{

	$("#main_div").load("updateCard.php",{  code : $("#code").val() , password : $("#password").val() , customer_name : $("#customer_name").val() , balance : $("#balance").val()   ,id : <?  echo $CardID;  ?> ,updateCard : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			</script>        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();

?>
