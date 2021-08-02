<?
include("autho_index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Management</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 25px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body >
<p>&nbsp;</p>
<table id="maintable" width="0%" border="1" align="center" style="border-style:none;border-bottom:none;border-top:none;" cellpadding="0" cellspacing="0" bordercolor="#606060">
  <tr>
    <td><table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="90"><img src="images/1.jpg" width="90" height="271" border="0" /></td>
              <td width="319"><img src="images/2.jpg" width="319" height="271" border="0" /></td>
              <td width="368"><img src="images/333.jpg" width="368" height="271" border="0" /></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><?
include("database/Connection.php");

include("database/admin/AdminDbase.php");

?>
          <?

if($desc == "manager")
{

$db = new AdminDBase();

$admin_per = new Admin();

$admin_per->id= "1";

$admin_per->name= $name;//md5($name);

$admin_per->pass= $pass;//md5($pass);

$ss = $db->checkAdmin($admin_per);

	if($ss == true)
	{
		$_SESSION['login'] = true;
		
		$_SESSION['login_id'] = 0;
		
		$_SESSION['login_type'] = "admin";
		
	?>
          <script language='JavaScript' type='text/javascript'>
	window.location='desgin/manager/index.php';
	      </script>
          <?
		
	}
	else
	{
	?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top" class="Msg">الاسم وكلمة السر خطأ الرجاء التأكد منهما أيها المدير</td>
            </tr>
          </table>
          <?
	}

}

if($desc == "person")
{

$db = new AdminDBase();

$admin_per = new Admin();

$admin_per->id= "2";

$admin_per->name= $name;//md5($name);

$admin_per->pass= $pass;//md5($pass);

$ss = $db->checkAdmin($admin_per);

	if($ss == true)
	{
		$_SESSION['login'] = true;
		
		$_SESSION['login_id'] = 0;
		
		$_SESSION['login_type'] = "person";
		
	?>
          <script language='JavaScript' type='text/javascript'>
	window.location='desgin/person/index.php';
	      </script>
          <?
		
	}
	else
	{
	?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top" class="Msg">الاسم وكلمة السر خطأ الرجاء التأكد منهما أيها المدير</td>
            </tr>
          </table>
          <?
	}

}

?>

<?
if($desc == "teachars")
{

include("database/teachars/TeacharsDbase.php");

$db = new TeacharsDbase();

$ss = $db->checkTeachar($name , $pass);

	if($ss == true)
	{
		$_SESSION['login'] = true;
		
		$_SESSION['login_id'] = $db->getTeacharAs($name , $pass);
		
		$_SESSION['login_type'] = "teachars";


	?>
          <script language='JavaScript' type='text/javascript'>
	window.location='desgin/teachars/index.php';
	      </script>
          <?
		
	}
	else
	{
	?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top" class="Msg">الاسم وكلمة السر خطأ الرجاء التأكد منهما أيها الأستاذ</td>
            </tr>
          </table>
          <?
	}

}
?>

<?
if($desc == "students")
{

include("database/students/StudentsDbase.php");

$db = new StudentsDbase();

$ss = $db->checkStudent($name , $pass);

	if($ss == true)
	{
		$_SESSION['login'] = true;
		
		$_SESSION['login_id'] = $db->getStudentAs($name , $pass);
		
		$_SESSION['login_type'] = "students";


	?>
          <script language='JavaScript' type='text/javascript'>
	window.location='desgin/students/index.php';
	      </script>
          <?
		
	}
	else
	{
	?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top" class="Msg">الاسم وكلمة السر خطأ الرجاء التأكد منهما أيها الأستاذ</td>
            </tr>
          </table>
          <?
	}

}
?>


          <br />
          <form id="form1" name="form1" method="post" action="">
            <table width="45%" height="20" style="border-style:none" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#000000">
            <tr>
              <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="57" align="center"><strong><img src="images/99.jpg" width="22" height="24" align="absmiddle" /></strong></td>
                  <td width="226" align="center">&nbsp;</td>
                  <td width="57" align="center"><img src="images/99.jpg" width="22" height="24" align="absmiddle" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" class="Msg" style="border-bottom-style:none;border-top-style:none"><strong>تسجيل الدخول </strong></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><table width="300" border="0" align="center">
                  <tr>
                    <td  align="right"><select name="desc"  class="selectAndText" style="width:126px" dir="rtl">
                        <option value="manager"  <? echo ($desc == "manager" ? "selected" : ""); ?>  >المدير</option>
						 <option value="person" <? echo ($desc == "person" ? "selected" : ""); ?>  >مراقب الدوام</option>
                        <option value="teachars" <? echo ($desc == "teachars" ? "selected" : ""); ?>  >المدرس</option>
                        <option value="students" <? echo ($desc == "students" ? "selected" : ""); ?>  >الطالب</option>
                      </select></td>
                    <td width="160" align="right" class="tahomaFont">الوصف</td>
                  </tr>
                  <tr>
                    <td align="right"><input dir="rtl" name="name" type="text" style="text-align:center;width:120px" class="selectAndText" /></td>
                    <td align="right" class="tahomaFont">الاسم</td>
                  </tr>
                  <tr>
                    <td align="right"><input dir="rtl" name="pass" type="password" style="text-align:center;width:120px" class="selectAndText" /></td>
                    <td align="right" class="tahomaFont">كلمة السر </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><input name="Submit" type="submit" class="button" value="تسجيل الدخول" /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
            <br />
          </form>
       </td>
      </tr>
      <tr>
        <td height="25" align="center" bgcolor="#606060" class="Footer" > School Management جميع الحقوق محفوظة لمجموعة  <img src="images/100.jpg" width="22" height="23" border="0" align="absmiddle" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close();
?>
