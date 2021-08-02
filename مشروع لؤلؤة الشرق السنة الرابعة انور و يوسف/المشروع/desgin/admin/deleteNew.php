
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();

if($CardID != "")
{
	
	$db->deleteNew($CardID);
	
	
?>
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="87" align="center" valign="middle" class="style1">تمت الحذف بنجاح </td>
  </tr>
</table>
<?
}

mysql_close();

?>