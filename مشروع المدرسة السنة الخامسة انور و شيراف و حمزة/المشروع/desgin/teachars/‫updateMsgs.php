<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">ارسال رسالة </td>
  </tr>
</table>
<?

include("../../database/students/StudentsDbase.php");

$dba = new StudentsDbase();

include("../../database/msgs/MsgsDbase.php");

$db = new MsgsDbase();

if($addStudent != "")
{

$std = new Msgs();

$std->id = $msg_id;

$std->student_id = $student_id;

$std->teacher_id = $_SESSION['login_id'];

$std->msg_title = $msg_title;

$std->msg = $msg;

$std->msg_datetime = date("Y-m-d H:i:s");

$std->msg_shown = "false";

$db->updateMsgs($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم ارسال الرسالة </td>
  </tr>
</table>

<?

}

$ffffff = $db->getMsgs($msg_id);

?>


<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right">
	  <select name="student_id" class="selectAndText" id="student_id" >
            <? 
			
			$std_stg_cla =  $dba->getAllStudents();
			
			for($i = 0 ; $i < count($std_stg_cla); $i++)
			{
			
			$rtrr =  $std_stg_cla[$i];

			 ?>
<option value="<? echo $rtrr->id; ?>" <? echo ($rtrr->id == $ffffff->student_id ? "selected" : ""); ?>><? echo $rtrr->name; ?></option>
            <? } ?>
          </select>	  </td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">الطالب</td>
    </tr>
    <tr>
      <td align="right"><input name="msg_title" type="text" class="selectAndText" id="msg_title" value="<? echo $ffffff->msg_title; ?>"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">العنوان</td>
    </tr>
    <tr>
      <td align="right"><textarea name="msg" class="selectAndText" id="msg" style="width:300px;height:100px"><? echo $ffffff->msg; ?></textarea></td>
      <td align="right" class="tahomaFont">:</td>
      <td align="right" class="tahomaFont">نص الرسالة </td>
    </tr>
   
    <tr>
      <td colspan="3" align="center"><input name="msg_id" type="hidden" id="msg_id" value="<? echo $msg_id; ?>" />
      <input style="width:50px" name="addStudent" type="submit" class="button" value="ارسال"></td>
    </tr>
  </table>
</form>
