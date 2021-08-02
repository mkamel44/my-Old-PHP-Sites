<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">تعديل طالب </td>
  </tr>
</table>
<?

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$dba = new Classes_RoomsDbase();

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

include("../../database/students/StudentsDbase.php");

$db = new StudentsDbase();

if($updateStudent != "")
{

$std = new Students();

$std->id = $id;

$std->name = $name;

$std->pass = $pass;

$std->fname = $fname;

$std->lname = $lname;

$std->father_name = $father_name;

$std->mother_name = $mother_name;

$std->birth = $birth;

$std->phone = $phone;

$std->mobile = $mobile;

$std->sex = $sex;

$std->classes_rooms_id = $classes_rooms_id;

$db->updateStudents($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم التعديل بنجاح </td>
  </tr>
</table>

<?

}

$std = $db->getStudent($id);


?>


<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText" id="name" value="<? echo $std->name; ?>" /></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">الاسم</td>
    </tr>
    <tr>
      <td align="right"><input name="pass" type="text" class="selectAndText" id="pass" value="<? echo $std->pass; ?>" /></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">كلمة السر </td>
    </tr>
    <tr>
      <td align="right"><input name="fname" type="text" class="selectAndText" value="<? echo $std->fname; ?>"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">الأسم الأول </td>
    </tr>
    <tr>
      <td align="right"><input name="lname" type="text" class="selectAndText" value="<? echo $std->lname; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">اسم الأخير </td>
    </tr>
    <tr>
      <td align="right"><input name="father_name" type="text" class="selectAndText" value="<? echo $std->father_name; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">اسم الأب </td>
    </tr>
    <tr>
      <td align="right"><input name="mother_name" type="text" class="selectAndText" value="<? echo $std->mother_name; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">اسم الأم </td>
    </tr>
    <tr>
      <td align="right"  dir="rtl">
	  <input name="birth" id="birth" type="text" class="selectAndText" value="<? echo $std->birth; ?>">
	  <script>
			$('#birth').datetimeEntry();
	   </script> 
	  </td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">تاريخ الولادة </td>
    </tr>
    <tr>
      <td align="right"><input name="phone" type="text" class="selectAndText" value="<? echo $std->phone; ?>"></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">رقم الهاتف </td>
    </tr>
    <tr>
      <td align="right">
	  <select name="sex" class="selectAndText">
	    <option value="ذكر" <? echo ($std->sex == "ذكر" ? "selected" : ""); ?>>ذكر</option>
	    <option value="انثى" <? echo ($std->sex == "انثى" ? "selected" : ""); ?>>انثى</option>
      </select>      </td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">الجنس</td>
    </tr>
    <tr>
      <td align="right"><select name="classes_rooms_id" class="selectAndText" id="classes_rooms_id" disabled="disabled">
          <? 
	   	$qww12 = $dba->getAllClasses_Rooms();
	   for($i = 0 ; $i < count($qww12); $i++){ 
	   $dataer =  $qww12[$i]
	   ?>
          <option <? echo ($std->classes_rooms_id == $dataer->id ? "selected" : ""); ?> value="<? echo $dataer->id; ?>">
            <? 
		$rrrr = $dbaa->getClass( $dataer->class_id ); 
		echo $rrrr->name;
		?>
            -
            <? 
		$ssss = $dbaaa->getRoom($dataer->room_id);
		echo $ssss->name;
		 ?>
          </option>
          <? } ?>
      </select></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">صف شعبة</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="updateStudent" type="submit" class="button" value="تعديل">
      <input type="hidden" name="id" value="<? echo $id; ?>" /></td>
    </tr>
  </table>
</form>
