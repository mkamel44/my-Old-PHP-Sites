<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض مادة واستاذ وصف وشعبة </td>
  </tr>
</table>
<?

include("../../database/sbject_teacher_classes_rooms/Sbject_Teacher_Classes_RoomsDbase.php");

$db = new Sbject_Teacher_Classes_RoomsDbase();

$products = $db->getAllSbject_Teacher_Classes_Rooms();

if(count($products) != 0)
{
include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

include("../../database/teachars/TeacharsDbase.php");

$dbaaaa = new TeacharsDbase();

include("../../database/subjects/SubjectsDbase.php");

$dbaaaaa = new SubjectsDbase();

?>


<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="30%" align="center" class="row">استاذ</td>
        <td width="30%" align="center" class="row">مادة</td>
        <td width="33%" align="center" class="row">الصف شعبة </td>

        <td width="7%" align="center" class="column">الرقم</td>
      </tr>

<?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont"  >
		 <? 
		$rs = $dbaaaa->getTeachar($products_one->teachars_id);
		echo $rs->name;
		 ?>		</td>
        <td align="center" valign="top" class="tahomaFont"  ><? 
		$r = $dbaaaaa->getSubject($products_one->subjects_id);
		echo $r->name;
		 ?></td>
        <td align="center" valign="top" class="tahomaFont"  >
        <? 
		$ccc = $dba->getClasse_Room($products_one->classes_rooms_id);
		$r = $dbaa->getClass($ccc->class_id);
		echo $r->name;
		echo " - ";
		$r = $dbaaa->getRoom($ccc->room_id);
		echo $r->name;
		 ?></td>

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
    <td align="center" class="Msg">لايوجد مادة واستاذ وصف وشعبة  بعد</td>
  </tr>
</table>
<br>
<?
}

?>
