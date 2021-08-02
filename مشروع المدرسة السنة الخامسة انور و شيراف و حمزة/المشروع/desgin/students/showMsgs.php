<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض الرسائل </td>
  </tr>
</table>
<?

include("../../database/students/StudentsDbase.php");

$dba = new StudentsDbase();

include("../../database/msgs/MsgsDbase.php");

$db = new MsgsDbase();

$countOfRecord = $db->getAllMsgsToStudentCount($_SESSION['login_id']);

if($countOfRecord != 0)

{

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="31%" align="center" class="row">تاريخ الارسال  </td>
        <td width="61%" align="center" class="row">عنوان الرسالة   </td>

        <td width="3%" align="center" class="row">عرض</td>

        <td width="5%" align="center" class="column">الرقم</td>
      </tr>

<?
	  
 $products = $db->getAllMsgsToStudent($_SESSION['login_id']);

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont" >
		<? echo $products_one->msg_datetime; ?>        </td>
        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->msg_title; ?>        </td>

        <td align="center" valign="top"><a href="index.php?inc=‫updateMsgs&msg_id=<? echo $products_one->id; ?>" class="link" >عرض</a></td>

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
    <td align="center" class="Msg">لايوجد رسائل بعد</td>
  </tr>
</table>
<br>
<?
}

?>
