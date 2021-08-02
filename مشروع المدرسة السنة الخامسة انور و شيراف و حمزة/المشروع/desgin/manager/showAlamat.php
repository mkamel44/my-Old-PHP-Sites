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
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="23%" rowspan="3" align="center" valign="bottom">
  <a href="index.php?inc=showAlamat" style="text-decoration:none;">تضفير</a>
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
  </td>
    <td align="right" valign="middle">
	<select name="teaches_id" class="selectAndText" id="teaches_id" style="width:300px" >
        <? 
			$all_teaches =  $dbaaaaaaa->getAllTeachars();
			
			for($i = 0 ; $i < count($all_teaches); $i++)
			{
			
			$cvbeor =  $all_teaches[$i];

			 ?>
        <option value="<? echo $cvbeor->id; ?>" <? echo ($teaches_id == $cvbeor->id ? "selected" : ""); ?>><? echo $cvbeor->name; ?></option>
        <? } ?>
      </select>
    </td>
    <td align="center" valign="middle" class="tahomaFont">اسماء الاساتذة </td>
  </tr>
  
  <?  
  if( $teaches_id != "" )
  { 
  ?>
  
  <tr>
  <td width="52%" align="right" valign="middle">
	<select name="sbject_teacher_classes_rooms_id" class="selectAndText" id="sbject_teacher_classes_rooms_id" style="width:300px">
        <? 
	   
	   $qww12 = $dba->getAllSbject_Teacher_Classes_RoomsByTeachar($teaches_id);
	   
	   for($i = 0 ; $i < count($qww12); $i++)
	   { 
	   $dataer =  $qww12[$i]
	   ?>
        <option <? echo ($sbject_teacher_classes_rooms_id == $dataer->id ? "selected" : ""); ?> value="<? echo $dataer->id; ?>">
		<? 
		
		$jjg = $dbaaaaa->getClasse_Room($dataer->classes_rooms_id);
		
		$eee = $dbaa->getClass($jjg->class_id);
		
		echo $eee->name." - ";
		
		$eees = $dbaaa->getRoom($jjg->room_id);
		
		echo $eees->name." - ";
		
		$ww = $dbaaaa->getSubject($dataer->subjects_id);
		
		echo $ww->name;
		?>
		</option>
        <? } ?>
      </select>	  </td>
    <td width="25%" align="center" valign="middle" class="tahomaFont">صف شعبة مادة </td>
  </tr>
  
  <?
  }
  ?>
  
  <?
  
  if($sbject_teacher_classes_rooms_id != "" && $teaches_id != "" && $teaches_id != "" )
  {
  ?>
  
  <tr>
    <td align="right" valign="middle">
	<select name="student_id" class="selectAndText" id="student_id" style="width:300px" >
            <? 
			$fff = $dba->getSbject_Teacher_Classes_Rooms($sbject_teacher_classes_rooms_id);

			$std_stg_cla =  $dbaaaaaa->getAllStudents2($fff->classes_rooms_id);
			
			for($i = 0 ; $i < count($std_stg_cla); $i++)
			{
			
			$rtrr =  $std_stg_cla[$i];

			 ?>
<option value="<? echo $rtrr->id; ?>" <? echo ($student_id == $rtrr->id ? "selected" : ""); ?>><? echo $rtrr->name; ?></option>
            <? } ?>
        </select>	</td>
    <td align="center" valign="middle" class="tahomaFont">اسماء الطلاب </td>
  </tr>
  <?
  }
  ?>
</table>

<?
if($add != "")
{

$aa = new Alamat();

$aa->student_id = $student_id;

$aa->teacher_id = $teaches_id;

$aa->sbject_teacher_classes_rooms_id = $sbject_teacher_classes_rooms_id;

$aa->mark = $mark;

$aa->about = $about;

$db->addAlamat($aa);

}

if($del != "")
{
$db->deleteAlamat($the_id);
}

?>

<?
if($sbject_teacher_classes_rooms_id != "" && $student_id != "")
{
$products = $db->getAllAlamatByTeacher2($teaches_id,$sbject_teacher_classes_rooms_id,$student_id);

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="32%" align="center" class="column">الوصف</td>
	  <td width="9%" align="center" class="column">العلامة</td>
      <td width="48%" align="center" class="column">الطالب </td>
	  <td width="6%" align="center" class="column">الرقم</td>
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
	  
	  $std_his = $dbaaaaaa->getStudent($products_one->student_id); 
	  
	  echo $std_his->name;
	  
	  ?></td>
	   <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
    </tr>
	<?
	}
	?>
  </table>
  <? 
  if(count($products) == 0)
  {
  ?>
  <table width="100%" height="65" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="81" align="center" valign="middle" class="TextFileds">لايوجد علامات بعد </td>
  </tr>
</table>
  <?
  }
  ?>
  <?
}
?>

</form>
