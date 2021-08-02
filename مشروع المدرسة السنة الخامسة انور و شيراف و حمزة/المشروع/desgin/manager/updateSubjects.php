<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">تعديل مادة </td>
  </tr>
</table>
<?

include("../../database/subjects/SubjectsDbase.php");

$db = new SubjectsDbase();

if($updateStudent != "")
{

$std = new Subjects();

$std->id = $id;

$std->name = $name;

$std->about = $about;

$db->updateSubject($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم التعديل بنجاح </td>
  </tr>
</table>

<?

}

$std = $db->getSubject($id);


?>


<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText" value="<? echo $std->name; ?>"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">اسم المادة</td>
    </tr>
    <tr>
      <td align="right"><textarea name="about" style="width:250px;height:60px" class="selectAndText"><? echo $std->about; ?></textarea></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">وصف</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="updateStudent" type="submit" class="button" value="تعديل">
      <input type="hidden" name="id" value="<? echo $id; ?>" /></td>
    </tr>
  </table>
</form>
