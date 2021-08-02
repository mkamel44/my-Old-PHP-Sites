<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/supervisor/SupervisorDbase.php");

$asc = new SupervisorDbase();

$aaaa = $asc->getNewByID($id);
?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435"><? echo $aaaa->name; ?></td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435"><? echo $aaaa->department; ?></td>
  </tr>
			<?
mysql_close();
?>
  
</table>
