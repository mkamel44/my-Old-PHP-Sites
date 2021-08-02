<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">اضافة شعبة </td>
  </tr>
</table>
<?

if($addStudent != "")
{

include("../../database/rooms/RoomsDbase.php");

$db = new RoomsDbase();

$std = new Rooms();

$std->name = $name;

$db->addRoom($std);

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
  <table width="55%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">اسم الشعبة </td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="addStudent" type="submit" class="button" value="اضافة"></td>
    </tr>
  </table>
</form>
