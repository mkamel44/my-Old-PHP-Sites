<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">برنامج الدوام </td>
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
<script language="JavaScript" type="text/JavaScript">
function openWindow(width,height,url) {
    x = (640 - width)/2, y = (480 - height)/2;

    if (screen) {
        y = (screen.availHeight - height)/2;
        x = (screen.availWidth - width)/2;
    }

  var randomnumber=Math.floor(Math.random()*10000);

    window.open(url,randomnumber+'newWin','width='+width+',height='+height+',screenX='+x+',screenY='+y+',top='+y+',scrollbars=1,left='+x);
}
</script>
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="29%" align="center" valign="middle" class="tahomaFont"><span class="column">
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
  </span></td>
    <td width="39%" align="right" valign="middle"><select name="classes_rooms_id" class="selectAndText" id="classes_rooms_id">
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
    <td width="32%" align="center" valign="middle" class="tahomaFont">صف شعبة</td>
  </tr>
</table>
<?
if( $classes_rooms_id != "")
{

?>
<table width="100%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><input name="Submit4" type="submit" class="button" value="الثلاثاء" onclick="openWindow(900,500,'addDawam.php?day_name=الثلاثاء&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
        <td align="center"><input name="Submit3" type="submit" class="button" value="الاثنين" onclick="openWindow(900,500,'addDawam.php?day_name=الاثنين&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
        <td align="center"><input name="Submit22" type="submit" class="button" value="الاحد" onclick="openWindow(900,500,'addDawam.php?day_name=الاحد&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
        <td align="center"><input name="Submit32" type="submit" class="button" onclick="openWindow(900,500,'addDawam.php?day_name=السبت&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" value="السبت" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><input name="Submit7" type="submit" class="button" value="الجمعة" onclick="openWindow(900,500,'addDawam.php?day_name=الجمعة&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
        <td align="center"><input name="Submit6" type="submit" class="button" value="الخميس" onclick="openWindow(900,500,'addDawam.php?day_name=الخميس&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
        <td align="center"><input name="Submit5" type="submit" class="button" value="الأربعاء" onclick="openWindow(900,500,'addDawam.php?day_name=الأربعاء&classes_rooms_id=<? echo $classes_rooms_id; ?>');return false;" /></td>
      </tr>
    </table></td>
  </tr>
</table>

<?
}

?>
</form>
