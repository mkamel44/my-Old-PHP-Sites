<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض طلاب </td>
  </tr>
</table>
<?

include("../../database/students/StudentsDbase.php");

$db = new StudentsDbase();

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();


$countOfRecord = $db->getStudentsCount();

if($countOfRecord != 0)

{

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="38%" align="center" class="row">صف شعبة</td>

        <td width="11%" align="center" class="row">اسم الأخير </td>

        <td width="11%" align="center" class="row">الأسم الأول </td>
        <td width="30%" align="center" class="row">الأسم  </td>

        <td width="4%" align="center" class="row">التعديل</td>

        <td width="3%" align="center" class="row">حذف</td>

        <td width="3%" align="center" class="column">الرقم</td>
      </tr>

<?
	  
 $products = $db->getAllStudents();

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont"  >
        <? 
		 $aaa = $dba->getClasse_Room($products_one->classes_rooms_id);
		 
		 $r1 = $dbaa->getClass($aaa->class_id);
		 
		 echo $r1->name." - ";
		 
		 $rw2 = $dbaaa->getRoom($aaa->room_id);
		 
		 echo $rw2->name;
	
		 ?></td>

        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->lname; ?></td>

        <td align="center" valign="top" class="tahomaFont" ><? echo $products_one->fname; ?> </td>
        <td align="center" valign="top" class="tahomaFont" >
        <? echo $products_one->name; ?>        </td>

        <td align="center" valign="top"><a href="index.php?inc=updateStudents&id=<? echo $products_one->id; ?>" class="link" >تعديل</a></td>

        <td align="center" valign="top"><a  href="index.php?inc=deleteStudent&id=<? echo $products_one->id; ?>" class="link" onclick="return confirm('هل انت متأكد من الحذف  ؟');" >حذف</a></td>

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
    <td align="center" class="Msg">لايوجد طلااب بعد</td>
  </tr>
</table>
<br>
<?
}

?>
