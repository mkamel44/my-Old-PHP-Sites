<?
extract($_REQUEST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة عرض تعديل دوام</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../../datetime/jquery.plugin.js"></script>
<script src="../../datetime/jquery.datetimeentry.js"></script>

</head>
<body>

<?

include("../../database/dawam/DawamDbase.php");

$db = new DawamDbase();


include("../../database/Connection.php");

if($add != "")
{

$lolo = new Dawams(); 

$lolo->classes_rooms_id = $classes_rooms_id;

$lolo->subjects_name = $subjects_name;

$lolo->from_time = $from_time;

$lolo->to_time = $to_time;

$lolo->day_name = $day_name;

$db->addDawam($lolo);

}

if($del != "")
{
$db->deleteDawam($the_id);
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="30%" align="center" class="column">الى</td>
      <td width="31%" align="center" class="column">من </td>
      <td width="32%" align="center" class="column">المادة</td>
      <td width="7%" align="center" class="column">الرقم</td>
    </tr>
    <?
	  
 $products = $db->getAllDawams( $classes_rooms_id , $day_name );

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 

?>
    <tr>
      <td align="center" class="column"><? echo  $products_one->to_time; ?></td>
      <td align="center" class="column"><? echo  $products_one->from_time; ?></td>
      <td align="center" class="column"><? echo  $products_one->subjects_name; ?></td>
      <td align="center" valign="top" class="column" ><? echo ($a1+1); ?></td>
    </tr>
	<?
	}
	?>
  </table>
<input name="classes_rooms_id" type="hidden" value="<? echo $classes_rooms_id; ?>" />
<input name="day_name" type="hidden" value="<? echo $day_name; ?>" />
<input name="the_id" type="hidden" id="the_id" value="" />
</form>
<?
mysql_close();
?>
</body>
</html>
