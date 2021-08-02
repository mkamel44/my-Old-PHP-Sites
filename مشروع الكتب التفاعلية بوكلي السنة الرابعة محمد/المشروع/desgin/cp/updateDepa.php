<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depa/DepaDbase.php");

$db = new DepaDbase();

$std = new Depa();

if($updatedepa != ""  )
{

$std->id = $DepaID;

$std->name = $name;

$std->descr = $descr;

$db->updateDepa($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}


if($DepaID != "")
{
	$std = $db->getDepaByID($DepaID);
}


?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td width="757" align="right" class="kokoko"><input name="name"  type="text" class="style2" id="name" dir="rtl" value="<? echo $std->name; ?>" /></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">اسم القسم </td>
      </tr>
      <tr>
        <td align="right" class="kokoko"><textarea name="descr" cols="50" rows="5" class="style2" id="descr" dir="rtl"><? echo $std->descr; ?></textarea></td>
        <td width="3" align="right" valign="top" class="style1">:</td>
        <td width="192" align="right" valign="top" class="style1">وصف القسم </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updatedepa" id="updatedepa" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updatedepa").on('click', function (){
			  
					if($("#name").val() != "" && $("#descr").val() != "")
					{

	$("#main_div").load("updateDepa.php",{  name : $("#name").val() , descr : $("#descr").val()  ,DepaID : <?  echo $DepaID;  ?> ,updatedepa : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			</script>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();

?>
