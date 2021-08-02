<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">تعديل استاذ </td>
  </tr>
</table>
<?

include("../../database/teachars/TeacharsDbase.php");

$db = new TeacharsDbase();

if($updateStudent != "")
{

$std = new Teachars();

$std->id = $id;

$std->name = $name;

$std->pass = $pass;

$std->fname = $fname;

$std->lname = $lname;

$std->phone = $phone;

$std->mobile = $mobile;

$std->dgree = $dgree;

$std->about = $about;

$db->updateTeachar($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم التعديل بنجاح </td>
  </tr>
</table>

<?

}

$std = $db->getTeachar($id);


?>


<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText" value="<? echo $std->name; ?>" /></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">الاسم</td>
    </tr>
    <tr>
      <td align="right"><input name="pass" type="text" class="selectAndText" value="<? echo $std->pass; ?>" /></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">كلمة السر </td>
    </tr>
    <tr>
      <td align="right"><input name="fname" type="text" class="selectAndText" value="<? echo $std->fname; ?>"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">الأسم الأول </td>
    </tr>
    <tr>
      <td align="right"><input name="lname" type="text" class="selectAndText" value="<? echo $std->lname; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">اسم الأخير </td>
    </tr>
    <tr>
      <td align="right"><input name="phone" type="text" class="selectAndText" value="<? echo $std->phone; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">رقم الهاتف </td>
    </tr>
    <tr>
      <td align="right"><input name="mobile" type="text" class="selectAndText" value="<? echo $std->mobile; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">رقم الموبايل أو العمل </td>
    </tr>
    <tr>
      <td align="right"><input name="dgree" type="text" class="selectAndText" value="<? echo $std->dgree; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">المؤهل العلمي </td>
    </tr>
    <tr>
      <td align="right"><textarea name="about" style="width:250px;height:60px" class="selectAndText"><? echo $std->about; ?></textarea></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">لمحة عن الحياة المهنية </td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="updateStudent" type="submit" class="button" value="تعديل">
      <input type="hidden" name="id" value="<? echo $id; ?>" /></td>
    </tr>
  </table>
</form>
