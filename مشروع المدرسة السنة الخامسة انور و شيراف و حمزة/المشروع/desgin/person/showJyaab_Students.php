<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">غياب الطلاب </td>
  </tr>
</table>
<?


include("../../database/jyaab_students/Jyaab_StudentsDbase.php");

$db = new Jyaab_StudentsDbase();

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

include("../../database/students/StudentsDbase.php");

$dbaaaa = new StudentsDbase();


?>
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="13%" align="center" valign="middle" class="tahomaFont"><span class="column">
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
  </span></td>
    <td width="28%" align="right" valign="middle" dir="rtl">
	<input name="date_of_hodor" type="text" class="selectAndText" id="date_of_hodor" style="width:100px" value="<? echo $date_of_hodor; ?>" />
	  <script>
			$('#date_of_hodor').datetimeEntry();
	   </script> 
	</td>
    <td width="7%" align="center" valign="middle" class="tahomaFont">التاريخ</td>
    <td width="38%" align="right" valign="middle"><select name="classes_rooms_id" class="selectAndText" id="classes_rooms_id">
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
    <td width="14%" align="center" valign="middle" class="tahomaFont">صف شعبة</td>
    
  </tr>
</table>

<?
if($add != "")
{

$std = new Jyaab_Students();

$std->student_id = $student_id;

$std->classes_rooms_id = $classes_rooms_id;

$std->date_of_hodor = $date_of_hodor;

$std->jyaab_hodor = $jyaab_hodor;

$db->addJyaab($std);

}

if($del != "")
{

$db->deleteJyaab($the_id);
}



?>

<?
if($date_of_hodor != "" && $classes_rooms_id != "")
{
$products = $db->getAllStudentsJyaab($classes_rooms_id ,  $date_of_hodor);
?>

  <table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="6%" align="center" class="column">&nbsp;</td>
	  <td width="42%" align="center" class="column">حضور او غياب </td>
      <td width="46%" align="center" class="column">الطالب </td>
	  <td width="6%" align="center" class="column">الرقم</td>
    </tr>
    <?
	
 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 

?>
    <tr>
      <td align="center" class="column"><input name="del" type="submit" class="selectAndText40" style="width:50px" id="del" onclick="document.all.the_id.value=<? echo  $products_one->id; ?>;" value="حذف" /></td>
	   <td align="center" class="column"><? echo $products_one->jyaab_hodor; ?></td>
      <td align="center" class="column"><? 
	  
	  $std_his = $dbaaaa->getStudent($products_one->student_id); 
	  
	  echo $std_his->name;
	  
	  ?></td>
	   <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
    </tr>
	<?
	}
	?>
    <tr class="row">
      <td align="center" class="row">        <input name="add" type="submit" class="selectAndText40" id="add" style="width:50px" value="اضافة" />      </td>
      <td align="center" class="row">
	  <select name="jyaab_hodor" class="selectAndText" id="jyaab_hodor" >
	    <option value="حضور">حضور</option>
	    <option value="غياب">غياب</option>
      
      </select>
	  </td>
      <td align="center"><select name="student_id" class="selectAndText" id="student_id" >
            <? 
			
			$std_stg_cla =  $dbaaaa->getAllStudents2($classes_rooms_id);
			
			for($i = 0 ; $i < count($std_stg_cla); $i++)
			{
			
			$rtrr =  $std_stg_cla[$i];

			 ?>
<option value="<? echo $rtrr->id; ?>"><? echo $rtrr->name; ?></option>
            <? } ?>
          </select></td>
		   <td align="center" valign="top" class="column" >&nbsp;</td>
    </tr>
  </table>
  <input name="the_id" type="hidden" id="the_id" value="" />

<?
}

?>
</form>
