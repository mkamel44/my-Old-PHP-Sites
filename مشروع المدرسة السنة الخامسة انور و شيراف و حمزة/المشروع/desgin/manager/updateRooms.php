<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض الشعب </td>
  </tr>
</table>
<?

include("../../database/rooms/RoomsDbase.php");

$db = new RoomsDbase();

if($updateStudent != "")
{

$std = new Rooms();

$std->id = $id;

$std->name = $name;

$db->updateRoom($std);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم التعديل بنجاح </td>
  </tr>
</table>

<?

}

$std = $db->getRoom($id);


?>


<form name="form1" method="post" action="">
  <table width="55%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td align="right"><input name="name" type="text" class="selectAndText" value="<? echo $std->name; ?>"></td>
      <td width="3" align="right" class="tahomaFont">:</td>
      <td width="198" align="right" class="tahomaFont">عنوان الشعبة </td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input style="width:50px" name="updateStudent" type="submit" class="button" value="تعديل">
      <input type="hidden" name="id" value="<? echo $id; ?>" /></td>
    </tr>
  </table>
</form>
