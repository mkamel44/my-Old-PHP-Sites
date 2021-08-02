<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">جدول العلامات </td>
  </tr>
</table>
<?
include("../../database/alamat/AlamatDbase.php");

$db = new AlamatDbase();

include("../../database/sbject_teacher_classes_rooms/Sbject_Teacher_Classes_RoomsDbase.php");

$dba = new Sbject_Teacher_Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

include("../../database/subjects/SubjectsDbase.php");

$dbaaaa = new SubjectsDbase();

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dbaaaaa = new Classes_RoomsDbase();

include("../../database/students/StudentsDbase.php");

$dbaaaaaa = new StudentsDbase();

include("../../database/teachars/TeacharsDbase.php");

$dbaaaaaaa = new TeacharsDbase();

?>

<?
$products = $db->getAllAlamatByStudent($_SESSION['login_id']);

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="44%" align="center" class="column">الوصف</td>
    <td width="8%" align="center" class="column">العلامة</td>
    <td width="33%" align="center" class="column">الاستاذ</td>
    <td width="10%" align="center" class="column">المادة</td>
    <td width="5%" align="center" class="column">الرقم</td>
  </tr>
  <?
	
 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 

?>
  <tr>
    <td align="center" class="column"><? echo $products_one->about; ?></td>
     <td align="center" class="column"><? echo $products_one->mark; ?></td>
     <td align="center" class="column"><? 
	 $qwas =  $dbaaaaaaa->getTeachar($products_one->teacher_id);
	 echo $qwas->name;
	  ?></td>
    <td align="center" class="column"><? 
	  
	  $std_his = $dba->getSbject_Teacher_Classes_Rooms($products_one->sbject_teacher_classes_rooms_id); 
	  
	  $axz = $dbaaaa->getSubject($std_his->subjects_id);
	   
	  echo $axz->name;
	  
	  ?></td>
     <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
  </tr>
  <?
	}
	?>
</table>
