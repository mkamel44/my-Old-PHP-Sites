<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض المواد </td>
  </tr>
</table>
<?

include("../../database/subjects/SubjectsDbase.php");

$db = new SubjectsDbase();

$countOfRecord = $db->getSubjectsCount();

if($countOfRecord != 0)

{

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="84%" align="center" class="row">اسم المادة</td>

        <td width="8%" align="center" class="row">التعديل</td>

        <td width="8%" align="center" class="column">الرقم</td>
      </tr>

<?
	  
 $products = $db->getAllSubjects();

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->name; ?>        </td>

        <td align="center" valign="top"><a href="index.php?inc=updateSubjects&id=<? echo $products_one->id; ?>" class="link" >تعديل</a></td>

        <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
      </tr>

<?

}

?>
</table>

<?
}
else
{
?>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="Msg">لايوجد مواد بعد</td>
  </tr>
</table>
<br>
<?
}

?>
