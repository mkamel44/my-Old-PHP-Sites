<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/supervisor/SupervisorDbase.php");

$asc = new SupervisorDbase();

$aaaa = $asc->getSupervisor($ss);
?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435" style="color:#FFFFFF"><?
	
	if($ss == "9")
	{
	echo "الصفحة الرئيسية";
	}
	if($ss == "10")
	{
	echo "من نحن";
	}
	if($ss == "11")
	{
	echo "شركائنا";
	}
	if($ss == "12")
	{
	echo "فريقنا";
	}
	
	?></td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435" ><img  src="<? echo $aaaa->name."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" border="1" align="right"  style="margin: 1px 5px" ><? echo $aaaa->password; ?></td>
  </tr>
</table>

<?
mysql_close();
?>

<?  
if($ss == "9")
{

function random_pic($dir)
{
 $files = glob($dir . '/*.*');
 $rand_keys = array_rand($files, 6);
 return array($files[$rand_keys[0]], $files[$rand_keys[1]], $files[$rand_keys[2]],$files[$rand_keys[3]], $files[$rand_keys[4]], $files[$rand_keys[5]]);
}

// Calling function

list($file_1,$file_2,$file_3,$file_4,$file_5,$file_6)= random_pic("upload"); 
?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_2."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px" /></span></div></td>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_1."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px"></span></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_4."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px" /></span></div></td>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_3."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px" /></span></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_6."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px" /></span></div></td>
    <td align="center" valign="middle"><div align="center"><span class="style435"><img  src="<? echo $file_5."?".date("Y-m-d H:i:s"); ?>" width="400" height="200" hspace="5" vspace="5" align="middle"  style="margin: 1px 5px" /></span></div></td>
  </tr>
</table>
<?
}
?>