<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/supervisor/SupervisorDbase.php");

$db = new SupervisorDbase();

$std = new Supervisor();

if($updateCard != ""  )
{

$std->id = $id;

$std->name = $title;

$std->department = $data;

$db->updateNew($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}


if($CardID != "")
{
	$std = $db->getNewByID($CardID);
}


?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td align="right" class="style1"><input name="title"  type="text"  class="style2" id="title" dir="rtl" value="<? echo $std->name; ?>" /></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="199" align="right" valign="top" class="style1">العنوان</td>
      </tr>
      <tr>
        <td align="right" class="style1"><textarea name="data" class="style2" id="data" style="width:400px;height:200px" dir="rtl"><? echo $std->department; ?></textarea></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">النص</td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if($("#title").val() != "" && $("#data").val() != "")
					{

	$("#main_div").load("updateNew.php",{  title : $("#title").val() , data : $("#data").val()   ,id : <?  echo $CardID;  ?> ,updateCard : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			</script>        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();

?>
