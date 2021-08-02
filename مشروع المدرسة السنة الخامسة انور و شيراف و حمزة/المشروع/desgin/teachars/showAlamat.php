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


?>
<form id="form2" name="form2" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
  <td width="23%" rowspan="2" align="center" valign="bottom" class="tahomaFont">
  <a href="index.php?inc=showAlamat" style="text-decoration:none;">تضفير</a>
    <input name="update_all" type="submit" class="selectAndText40" style="width:50px" id="update_all" value="تحديث"  />
	</td>
    <td width="52%" align="right" valign="middle">
	<select name="sbject_teacher_classes_rooms_id" class="selectAndText" id="sbject_teacher_classes_rooms_id" style="width:300px">
        <? 
	   
	   $qww12 = $dba->getAllSbject_Teacher_Classes_RoomsByTeachar($_SESSION['login_id']);
	   
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
  
  if($update_all != "" || $add != "" || $del != "")
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

$aa->teacher_id = $_SESSION['login_id'];

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
$products = $db->getAllAlamatByTeacher2($_SESSION['login_id'],$sbject_teacher_classes_rooms_id,$student_id);

?>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="5%" align="center" class="column">&nbsp;</td>
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
      <td align="center" class="column"><input name="del" type="submit" class="selectAndText40" style="width:50px" id="del" onclick="document.all.the_id.value=<? echo  $products_one->id; ?>;" value="حذف" /></td>
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
    <tr class="row">
      <td align="center" class="row">        <input name="add" type="submit" class="selectAndText40" id="add" style="width:50px" value="اضافة" />      </td>
      <td align="center"><input name="about" type="text" class="selectAndText" id="about" style="width:150px;text-align:center" /></td>
      <td align="center" class="row"><input name="mark" type="text" class="selectAndText" id="mark" style="width:50px;text-align:center" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}"></td>
      <td align="center"><input name="student_name" type="text" disabled="disabled" class="selectAndText" id="student_name" style="width:150px;text-align:center" value="<? 
	  $ytee =  $dbaaaaaa->getStudent($student_id);
	   
	  echo $ytee->name;
	  
 ?>" readonly /></td>
		   <td align="center" valign="top" class="column" >&nbsp;</td>
    </tr>
  </table>
  <input name="the_id" type="hidden" id="the_id" value="" />
<?
}
?>
</form>
