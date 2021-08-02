<?
session_start();

extract($_REQUEST);

if($_SESSION['login_a'] == true)
{	
	?>
	<script language='JavaScript' type='text/JavaScript'>
	window.location='desgin/a/index.php';
	</script>
	<?
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>تسجيل الدخول</title>
<style type="text/css">
<!--
body {
	background-color: #7A0309;
}
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight:bold;
	font-size:18px;
}
-->
</style></head>
<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<form id="form1" name="form1" method="post" action="">	

 <?

if($Submit == "تسجيل الدخول")
{

include("database/Connection.php");

$real_name = $name;

$pass = md5(preg_replace('/[^a-zA-Z0-9]/','',$pass));

$name = md5(preg_replace('/[^a-zA-Z0-9]/','',$name));

include("database/admin/AdminDbase.php");
		
$db = new AdminDbase();
		
$adm = new Admin();
		
$adm->admin_name=$name;
		
$adm->admin_pass=$pass;

$adm->admin_id=2;
		
$ss = $db->checkAdmin($adm);
		
			if($ss == true)
			{
			
				$_SESSION["login_a"] = true;
				
				$_SESSION["login_time"] =  date("Y-m-d H:i:s");
				
				
					?>
				  <script language='JavaScript' type='text/javascript'>
					window.location='desgin/a/index.php';
				  </script>
				  <?	
			}
			else
			{
			?>
				  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
					  <td align="center" valign="middle" bgcolor="#FFFFFF" class="btn-danger"><h4>الرمز او كلمة المروور خطأ</h4> </td>
					</tr>
</table>
<br/>
  <?
			} 
			
	mysql_close();		
			
}
		?>
  <table width="0%" height="163" border="1" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td align="center" valign="top"><table width="392" height="153" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35" colspan="3" align="center" bgcolor="#FFFFFF"  class="style1 bg-danger btn-lg"><strong>الرجاء من  ادخال الاسم وكلمة المرور </strong></td>
              </tr>
              <tr>
                <td width="56%" height="34" align="right" bgcolor="#FFFFFF"  class="bg-danger"><input name="name" type="text" class="form-control " id="name" style="text-align:center" /></td>
                 <td align="center" bgcolor="#FFFFFF" class="style1 bg-danger btn-lg"  ><strong>الاســــــــــــم</strong></td>
              </tr>
              <tr>
                <td height="33" align="right" bgcolor="#FFFFFF"  class="bg-danger"><input name="pass" type="password" class="form-control " id="pass" style="text-align:center" /></td>
                <td align="center" bgcolor="#FFFFFF" class="style1 bg-danger btn-lg"  ><strong>كلمة الـمـرور </strong></td>
              </tr>
              <tr>
                <td height="47" colspan="3" align="center" bgcolor="#FFFFFF">
                  <input name="Submit" type="submit" class="style1" style="width:150px" value="تسجيل الدخول" />                </td>
              </tr>
            </table></td>
          </tr>
  </table>
        <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>

</form>

</body>
</html>