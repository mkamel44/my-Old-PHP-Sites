<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">حذف مادة </td>
  </tr>
</table>
<?

include("../../database/subjects/SubjectsDbase.php");

$db = new SubjectsDbase();

$db->deleteSubject($id);

?>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم الحذف بنجاح </td>
  </tr>
</table>
