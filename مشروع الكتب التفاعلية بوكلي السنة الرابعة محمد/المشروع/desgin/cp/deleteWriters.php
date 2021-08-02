<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

$db = new WriterDbase();

if($WriterID != "")
{

	if($db->checkWriterCanDel($WriterID))
	{
	
		$db->deleteWriter($WriterID);
		
		unlink($path);
		
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