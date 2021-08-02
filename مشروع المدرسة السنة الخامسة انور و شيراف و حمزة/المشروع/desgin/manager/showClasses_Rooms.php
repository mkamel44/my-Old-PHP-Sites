<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table id="middletable" width="100%" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#BA0D13" dir="rtl"><a style="color:#F7971F;" href="index.php?log=out">تسجيل الخروج </a></td>
    <td width="83%" align="right" bgcolor="#BA0D13" class="Title" dir="rtl">عرض صف شعبة </td>
  </tr>
</table>
<?

include("../../database/classes_rooms/Classes_RoomsDbase.php");

$db = new Classes_RoomsDbase();

$products = $db->getAllClasses_Rooms();

if(count($products) != 0)
{

include("../../database/classes/ClassesDbase.php");

$dbaa = new ClassesDbase();

include("../../database/rooms/RoomsDbase.php");

$dbaaa = new RoomsDbase();

?>


<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>
        <td width="44%" align="center" class="row">اسم  شعبة </td>
        <td width="49%" align="center" class="row">اسم صف  </td>

        <td width="7%" align="center" class="column">الرقم</td>
      </tr>

<?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];

?>

      <tr>
        <td align="center" valign="top" class="tahomaFont"  >
		 <? 
		$rs = $dbaaa->getRoom($products_one->room_id);
		echo $rs->name;
		 ?>
		</td>
        <td align="center" valign="top" class="tahomaFont"  >
        <? 
		$r = $dbaa->getClass($products_one->class_id);
		echo $r->name;
		 ?></td>

        <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
      </tr>

<?

}

?>
</table>

<?
}
else
{
?>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="Msg">لايوجد صف شعبة بعد</td>
  </tr>
</table>
<br>
<?
}

?>
