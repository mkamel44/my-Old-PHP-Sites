<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

$db = new WriterDbase();

$std = new Writer();

if($addwriters != "" )
{

$std->id = $WriterID;

$std->name = $name;

$std->pass = $pass;

$std->details = $details;

$std->full_name = $full_name;

$std->pic = $pic;
			
$db->updateWriter($std);
					
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تم التعديل بنجاح </td>
				  </tr>
				</table>
<?

}
	
	
if($WriterID != "")
{
	$std = $db->getWriterByID($WriterID);
}
?>

                <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td align="right" class="style1"><input name="full_name"  type="text"  class="style2" id="full_name" dir="rtl" value="<? echo $std->full_name; ?>"></td>
                    <td align="right" valign="top" class="style1">:</td>
                    <td align="right" valign="top" class="style1">الاسم الكامل للكاتب </td>
                  </tr>
                      <tr>
                        <td width="748" align="right" class="style1"><input name="name"  type="text"  class="style2" id="name" dir="rtl" value="<? echo $std->name; ?>"></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">الاسم</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="pass"  type="text"  class="style2" id="pass" dir="rtl" value="<? echo $std->pass; ?>"  /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">كلمة السر </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="details" cols="50" rows="5" id="details" class="style2" dir="rtl"><? echo $std->details; ?></textarea></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">تفاصيل الكاتب </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="تعديل" />
                            <script type="text/javascript">
			  </script>
                            <script type="text/javascript">$("#addshop").on('click', function (){
			  
					if($("#full_name").val() != "" && $("#name").val() != ""  && $("#pass").val() != ""   && $("#details").val() != ""  )
					{
					
			$("#main_div").load("updateWriters.php",{  full_name : $("#full_name").val() , name : $("#name").val() , pass : $("#pass").val(), details : $("#details").val()  , WriterID : <? echo $WriterID; ?> ,addwriters : "done"  });
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}
			   
			  });
			                </script></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
<?
mysql_close();
?>