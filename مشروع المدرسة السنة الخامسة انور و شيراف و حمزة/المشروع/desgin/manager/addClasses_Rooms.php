<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">اضافة صف شعبة </td>
  </tr>
</table>
<?

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

if($addStudent != "")
{

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$db = new Classes_RoomsDbase();

$std = new Classes_Rooms();

$std->class_id = $class_id;

$std->room_id = $room_id;

$db->addClasses_Rooms($std);

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
      <td align="right"><select name="class_id" class="selectAndText">
        <? 
	   	$qww12 = $dbaa->getAllClasses();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
        <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
        <? } ?>
      </select></td>
      <td width="28" align="right" class="tahomaFont">:</td>
      <td width="175" align="right" class="tahomaFont">الصف</td>
    </tr>
    <tr>
      <td align="right"><select name="room_id" class="selectAndText">
          <? 
	   	$qww12 = $dbaaa->getAllRoom();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
          <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
          <? } ?>
      </select></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">الشعبة</td>
    </tr>
    
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="addStudent" type="submit" class="button" value="اضافة"></td>
    </tr>
  </table>
</form>
