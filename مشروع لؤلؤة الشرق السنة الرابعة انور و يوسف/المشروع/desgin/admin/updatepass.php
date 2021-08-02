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

$std = new Supervisor();

if($updateshop != ""  )
{

$std->name = md5($name);

$std->password = md5($password);

$std->department = $department;

$std->id = $depa;

$db->updateSupervisor($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}

?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td align="right" class="kokoko"><span class="bg-danger">
      <select name="depa" class="style2" id="depa" style="width:155px" dir="rtl">
        <option value="1" selected="selected" >المدير العام</option>
        <option value="2">البطاقة الزكية</option>
        <option value="3">العاب الأطفال</option>
        <option value="4">المسابح</option>
        <option value="5">صالات الرياضية</option>
        <option value="6">الفنادق</option>
        <option value="7">المطاعم</option>
        <option value="8">المول</option>
      </select>
    </span></td>
    <td align="right" valign="top" class="style1">:</td>
    <td align="right" valign="top" class="style1">اسم المشرف </td>
  </tr>
  <tr>
    <td align="right" class="kokoko"><input name="department"  type="text" class="style2" id="department" dir="rtl" /></td>
    <td align="right" valign="top" class="style1">:</td>
    <td align="right" valign="top" class="style1">اسم القسم </td>
  </tr>
      <tr>
        <td align="right" class="kokoko"><input name="name"  type="text" class="style2" id="name" dir="rtl" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">الاسم </td>
      </tr>
      <tr>
        <td align="right" class="kokoko"><input name="password"  type="text" class="style2" id="password" dir="rtl" /></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="192" align="right" valign="top" class="style1">كلمة السر </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if($("#department").val() != "" && $("#name").val() != "" && $("#password").val() != "")
					{

	$("#main_div").load("updatepass.php",{  department : $("#department").val() , name : $("#name").val()  , password : $("#password").val() , depa : $("#depa").val()  ,updateshop : "done"  });
									 
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
