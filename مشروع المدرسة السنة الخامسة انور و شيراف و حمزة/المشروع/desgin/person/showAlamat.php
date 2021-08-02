<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">كشف العلامات </td>
  </tr>
</table>
<?

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();


?>
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="25%" align="center" valign="middle" class="tahomaFont"><span class="column">
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
  </span></td>
    <td width="43%" align="right" valign="middle"><select name="classes_rooms_id" class="selectAndText" id="classes_rooms_id">
        <? 
	   	$qww12 = $dba->getAllClasses_Rooms();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
        <option <? echo ($classes_rooms_id == $dataer->id ? "selected" : ""); ?> value="<? echo $dataer->id; ?>"><? 
		$rrrr = $dbaa->getClass( $dataer->class_id ); 
		echo $rrrr->name;
		?> - <? 
		$ssss = $dbaaa->getRoom($dataer->room_id);
		echo $ssss->name;
		 ?></option>
        <? } ?>
    </select></td>
    <td width="32%" align="center" valign="middle" class="tahomaFont"> صف شعبة مادة </td>
  </tr>
</table>
<?
if( $classes_rooms_id != "")
{

?>

<?
}

?>
</form>
