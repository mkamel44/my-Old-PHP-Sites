<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" bordercolor="#FF0000" id="example">
                  <tr>
                    <td>
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

include("../../database/books/BooksDbase.php");

include("../../database/depa/DepaDbase.php");

$db1 = new WriterDbase();

$db2 = new DepaDbase();

$db = new BooksDbase();

if($addBooks != "" )
{

$std = new Book();

$std->id = $BookID;

$std->depa_id = $depa_id;

$std->writer_id = $writer_id;

$std->address = $address;

$std->details = $details;
			
$db->updateBook($std);
					
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تم التعديل بنجاح </td>
				  </tr>
				</table>
<?

}
	
	
if($BookID != "")
{
	$std = $db->getBookByID($BookID);
}
?>

                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="972" align="right" class="style1"><select name="depa_id" class="style2" id="depa_id" >
                        <? 
							$qww12 = $db2->getDepas();
						   for($i = 0 ; $i < count($qww12); $i++){ 
						   $dataer =  $qww12[$i]
						   ?>
                        <option value="<? echo $dataer->id; ?>" <? echo ($std->depa_id == $dataer->id ? "selected" : ""); ?>><? echo $dataer->name; ?></option>
                        <? } ?>
                    </select></td>
                    <td width="5" align="right" valign="top" class="style1">:</td>
                    <td width="208" align="right" valign="top" class="style1">القسم</td>
                  </tr>
                  <tr>
                    <td align="right" class="style1"><select name="writer_id" class="style2" id="writer_id" >
                        <? 
							$qww12 = $db1->getWriters();
						   for($i = 0 ; $i < count($qww12); $i++){ 
						   $dataer =  $qww12[$i]
						   ?>
                        <option value="<? echo $dataer->id; ?>" <? echo ($std->writer_id == $dataer->id ? "selected" : ""); ?>><? echo $dataer->full_name; ?></option>
                        <? } ?>
                      </select>                    </td>
                    <td align="right" valign="top" class="style1">:</td>
                    <td align="right" valign="top" class="style1">الكاتب</td>
                  </tr>
                  <tr>
                    <td align="right" class="style1"><input name="address"  type="text"  class="style2" id="address" dir="rtl" value="<? echo $std->address; ?>" /></td>
                    <td align="right" valign="top" class="style1">:</td>
                    <td align="right" valign="top" class="style1">عنوان الكتاب </td>
                  </tr>
                  <tr>
                    <td align="right" class="style1"><textarea name="details" cols="50" rows="15" id="details" class="style2" dir="rtl"><? echo $std->details; ?></textarea></td>
                    <td align="right" valign="top" class="style1">:</td>
                    <td align="right" valign="top" class="style1">الكتاب</td>
                  </tr>
                      
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="تعديل" />

                            <script type="text/javascript">
								$("#addshop").on('click', function (){
			  
					if($("#address").val() != "" && $("#details").val() != "" )
					{
					
			$("#main_div").load("updateBooks.php",{  depa_id : $("#depa_id").val() , writer_id : $("#writer_id").val() , address : $("#address").val(), details : $("#details").val() , BookID : <? echo $BookID; ?> , addBooks : "done"  });
									 
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