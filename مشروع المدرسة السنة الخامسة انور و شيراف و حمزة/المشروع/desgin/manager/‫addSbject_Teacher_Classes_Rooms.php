<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">اضافة مادة واستاذ وصف وشعبة </td>
  </tr>
</table>
<?
include("../../database/classes/ClassesDbase.php");

$z = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$x = new RoomsDbase();

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/teachars/TeacharsDbase.php");

$dbaa = new TeacharsDbase();

include("../../database/subjects/SubjectsDbase.php");

$dbaaa = new SubjectsDbase();

if($addStudent != "")
{

include("../../database/sbject_teacher_classes_rooms/Sbject_Teacher_Classes_RoomsDbase.php");

$dbaaaa = new Sbject_Teacher_Classes_RoomsDbase();

$std = new Sbject_Teacher_Classes_Rooms();

$std->classes_rooms_id = $classes_rooms_id;

$std->subjects_id = $subjects_id;

$std->teachars_id = $teachars_id;

$dbaaaa->addSbject_Teacher_Classes_Rooms($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تمت الاضافة بنجاح </td>
  </tr>
</table>

<?

}


?>


<form name="form1" method="post" action="">
  <table width="54%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><select name="classes_rooms_id" class="selectAndText" id="classes_rooms_id">
        <? 
	   	$qww12 = $dba->getAllClasses_Rooms();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
        <option value="<? echo $dataer->id; ?>">
          <? 
		$rrrr = $z->getClass( $dataer->class_id ); 
		echo $rrrr->name;
		?>
          -
  <? 
		$ssss = $x->getRoom( $dataer->room_id );
		echo $ssss->name;
		 ?>
          </option>
        <? } ?>
      </select></td>
      <td width="28" align="right" class="tahomaFont">:</td>
      <td width="175" align="right" class="tahomaFont">الصف شعبة </td>
    </tr>
    <tr>
      <td align="right"><select name="subjects_id" class="selectAndText" id="subjects_id">
          <? 
	   	$qww12 = $dbaaa->getAllSubjects();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
          <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
          <? } ?>
      </select></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">مادة</td>
    </tr>
    <tr>
      <td align="right"><select name="teachars_id" class="selectAndText" id="teachars_id">
          <? 
	   	$qww12 = $dbaa->getAllTeachars();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
          <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
          <? } ?>
      </select></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">استاذ</td>
    </tr>
    
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="addStudent" type="submit" class="button" value="اضافة"></td>
    </tr>
  </table>
</form>
