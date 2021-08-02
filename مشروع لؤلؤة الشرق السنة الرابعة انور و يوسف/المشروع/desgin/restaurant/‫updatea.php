<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/departments/DepartmentDbase.php");

$db = new DepartmentDbase();

$std = new Departments();

if($updateshop != ""  )
{

$std->id = $ids;

$std->department = $department;

$std->price = $price;

$std->information = $information;

$db->updatea($std);
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت التعديل بنجاح </td>
				  </tr>
				</table>

				
<?
}


if($ids != "")
{
	$std = $db->geta($ids);
}
else
{
	$ids = 8;
	$std = $db->geta($ids);
}

?>
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="747" align="right" class="kokoko">      <select name="ids" class="style2" id="ids" style="width:155px" dir="rtl">
        <option value="8" <? echo ($std->id == "8" ?  "selected" : ""); ?>>كفتيريا</option>
        <option value="9" <? echo ($std->id == "9" ?  "selected" : ""); ?>>مطاعم</option>
      </select>   
	    <script type="text/javascript">
	   $('#ids').change(function() {
 		$("#main_div").load("‫updatea.php",{   ids : $("#ids").val()  });
 		});
	   </script>
	   </td>
    <td width="34" align="right" valign="top" class="style1">:</td>
    <td width="163" align="right" valign="top" class="style1">القسم</td>
  </tr>
  <tr>
    <td align="right" class="kokoko"><span class="bg-danger">      <input name="department"  type="text"  class="style2" id="department" dir="rtl"  value="<? echo $std->department; ?>" />    </td>
    <td align="right" valign="top" class="style1">:</td>
    <td align="right" valign="top" class="style1">اسم القسم </td>
  </tr>
  <tr>
    <td align="right" class="kokoko">
   
      <input name="price"  type="text"  class="style2" id="price" dir="rtl" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="<? echo $std->price; ?>" />
      </td>
    <td align="right" valign="top" class="style1">:</td>
    <td align="right" valign="top" class="style1">السعر </td>
  </tr>
      <tr>
        <td align="right" class="kokoko"><textarea name="information" class="style2" id="information" dir="rtl" style="width:400px;height:200px"><? echo $std->information; ?></textarea></td>
        <td align="right" valign="top" class="style1">:</td>
        <td align="right" valign="top" class="style1">المعلومات</td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input style="width:50px" name="updateshop" id="updateshop" type="submit" class="style2" value="تعديل" />
            <script type="text/javascript">
			  $("#updateshop").on('click', function (){
			  
					if( $("#price").val() != "" &&  $("#information").val() != "" &&  $("#department").val() != "" )
					{

						$("#main_div").load("‫updatea.php" , {  department : $("#department").val()  , price : $("#price").val() , information : $("#information").val() , ids : $("#ids").val() , updateshop : "done"  });
									 
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
