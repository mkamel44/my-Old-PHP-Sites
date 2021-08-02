<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">جدول الامتحان </td>
  </tr>
</table>
<?


include("../../database/exam/ExamDbase.php");

$db = new ExamDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();


?>
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="27%" align="center" valign="middle" class="tahomaFont"><span class="column">
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
  </span></td>
    <td width="47%" align="right" valign="middle"><select name="class_id" class="selectAndText">
        <? 
	   	$qww12 = $dbaa->getAllClasses();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
        <option <? echo ($class_id == $dataer->id ? "selected" : ""); ?> value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
        <? } ?>
      </select></td>
    <td width="26%" align="center" valign="middle" class="tahomaFont">صف </td>
  </tr>
</table>

<?
if($add != "")
{

$std = new Exams();

$std->class_id = $class_id;

$std->subjects_name = $subjects_name;

$std->date_of_exam = $date_of_exam;

$db->addExam($std);

}

if($del != "")
{

$db->deleteExam($the_id);
}



?>

<?
if($class_id != "")
{
$products = $db->getAllExams($class_id );
?>

  <table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="45%" align="center" class="column">التاريخ</td>
      <td width="50%" align="center" class="column">المادة </td>
	  <td width="5%" align="center" class="column">الرقم</td>
    </tr>
    <?
	
 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 

?>
    <tr>
      <td align="center" class="column"><? echo $products_one->date_of_exam; ?></td>
      <td align="center" class="column"><? echo $products_one->subjects_name; ?></td>
	   <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
    </tr>
	<?
	}
	?>
  </table>
  <input name="the_id" type="hidden" id="the_id" value="" />

<?
}

?>
</form>
