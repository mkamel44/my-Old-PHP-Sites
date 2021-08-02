<?
include("autho_cp_index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/vegas.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<title>تسجيل الدخول لوحة المشرف</title>
</head>
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
			
				$_SESSION["login_cp"] = true;
				
				$_SESSION["login_time"] =  date("Y-m-d H:i:s");
				
				
					?>
				  <script language='JavaScript' type='text/javascript'>
					window.location='desgin/cp/index.php';
				  </script>
				  <?	
			}
			else
			{
			?>
				  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
					  <td height="10" align="center" valign="middle" class="btn-danger"><h4>الرمز او كلمة المروور خطأ</h4> </td>
					</tr>
</table>
<br/>
  <?
			} 
			
	mysql_close();		
			
}
		?>
  <table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top"><img src="images/v1.jpg" width="62" height="175" border="0" /></td>
            <td align="center" valign="top"><table width="392" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="74" colspan="3" align="center"  class="btn-lg bg-danger">الرجاء من المشرف ادخال الاسم وكلمة المرور </td>
              </tr>
              <tr>
                <td width="56%" align="right"  class="bg-danger"><input name="name" type="text" class="form-control" id="name" style="text-align:center" /></td>
                 <td align="right" class="btn-lg bg-danger"  >الاســــــــــــم</td>
              </tr>
              <tr>
                <td height="47" align="right"  class="bg-danger"><input name="pass" type="password" class="form-control" id="pass" style="text-align:center" /></td>
                <td align="right" class="btn-lg bg-danger"  >كلمة الـمـرور </td>
              </tr>
              <tr>
                <td colspan="3" align="center">
				<br />
				<label>
                  <input type="submit" name="Submit" value="تسجيل الدخول" class="form-control" style="width:200px" />
                  </label>                </td>
              </tr>
            </table></td>
            <td align="center" valign="top"><img src="images/v2.jpg" width="54" height="175" border="0" /></td>
          </tr>
  </table>
        <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>

</form>

<script src="js/jquery.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>

</body>
</html>