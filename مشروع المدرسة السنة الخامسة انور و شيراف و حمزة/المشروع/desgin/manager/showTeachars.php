<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض الأساتذة </td>
  </tr>
</table>
<?

include("../../database/teachars/TeacharsDbase.php");

$db = new TeacharsDbase();

$countOfRecord = $db->getTeacharssCount();

if($countOfRecord != 0)

{

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="17%" align="center" class="row">اسم الأخير </td>

        <td width="23%" align="center" class="row">الأسم الأول </td>
        <td width="36%" align="center" class="row">الأسم  </td>

        <td width="8%" align="center" class="row">التعديل</td>

        <td width="8%" align="center" class="row">حذف</td>

        <td width="8%" align="center" class="column">الرقم</td>
      </tr>

<?
	  
 $products = $db->getAllTeachars();

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->lname; ?></td>

        <td align="center" valign="top" class="tahomaFont" ><? echo $products_one->fname; ?> </td>
        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->name; ?>        </td>

        <td align="center" valign="top"><a href="index.php?inc=updateTeachars&id=<? echo $products_one->id; ?>" class="link" >تعديل</a></td>

        <td align="center" valign="top"><a  href="index.php?inc=deleteTeachar&id=<? echo $products_one->id; ?>" class="link" onclick="return confirm('هل انت متأكد من الحذف  ؟');" >حذف</a></td>

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
    <td align="center" class="Msg">لايوجد أساتذة بعد</td>
  </tr>
</table>
<br>
<?
}

?>
