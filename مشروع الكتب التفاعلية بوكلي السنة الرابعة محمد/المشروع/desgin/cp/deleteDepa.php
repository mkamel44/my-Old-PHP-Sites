<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depa/DepaDbase.php");

$db = new DepaDbase();

if($DepaID != "")
{

	if($db->checkDepaCanDel($DepaID))
	{

		$db->deleteDepa($DepaID);
		
	?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td height="87" align="center" valign="middle" class="style1">تمت الحذف بنجاح </td>
	  </tr>
	</table>
	<?
	}
	else
	{
	?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td height="87" align="center" valign="middle" class="style1">هنالك كتب متعلقة بهذا القسم</td>
	  </tr>
	</table>
	<?
	}
	
}

mysql_close();

?>