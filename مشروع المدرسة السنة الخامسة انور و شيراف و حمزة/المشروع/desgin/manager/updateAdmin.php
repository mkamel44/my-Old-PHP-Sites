<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">تعديل كلمة السر </td>
  </tr>
</table>
<?

include("../../database/admin/AdminDbase.php");

$db = new AdminDbase();

if($updateStudent != "")
{

$std = new Admin();

$std->id = $id;

$std->name = $name;//md5($name);

$std->pass = $pass;//md5($pass);

$db->updateAdmin($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم التعديل بنجاح </td>
  </tr>
</table>

<?

}


?>


<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText" style="text-align:center;"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">الاسم</td>
    </tr>
    <tr>
      <td align="right"><input name="pass" type="text" class="selectAndText" id="pass" style="text-align:center;" /></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">كلمة السر </td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="updateStudent" type="submit" class="button" value="تعديل">
      <input type="hidden" name="id" value="<? echo $id; ?>" /></td>
    </tr>
  </table>
</form>
