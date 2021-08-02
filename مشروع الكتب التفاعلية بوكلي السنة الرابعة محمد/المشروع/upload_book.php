<link href="css/style.css" rel="stylesheet" type="text/css">
<?
session_start();

extract($_REQUEST);

include("database/Connection.php");

include("database/books/BooksDbase.php");

include("database/depa/DepaDbase.php");

include("database/writers/WriterDbase.php");

$db3 = new WriterDbase();

$db2 = new DepaDbase();

$db = new BooksDbase();

if($addBooks != "" )
{

$std = new Book();

$std->depa_id = $depa_id;

$std->writer_id = $_SESSION["login_writer_data"];

$std->address = $address;

$std->details = $details;

$std->pdf = $pdf;

$std->word = $word;

$std->num_details = 0;

$std->num_pdf = 0;

$std->num_word = 0;

$std->likes = 0;

$std->agree = "false";

$std->others = $others;

$std->pic1 = $pic1;

$std->pic2 = $pic2;
			
$last_book_id = $db->addBook($std);


	for($i = 0 ; $i < count($book_r); $i++)
	{
		 $db->addBook_r($last_book_id , $book_r[$i] );
	
	}

$done_msg = "done";	


}


$qww12 = $db2->getDepas();

if(count($qww12) != 0)
{

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#7A0309">
                  <tr>
                    <td align="right" class="style3">تحميل كتاب   </td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><table width="100%" border="0" cellpadding="2" cellspacing="2">
				  <tr>
					<td height="120" align="right" valign="top" class="style34">
					<?
					if($done_msg != "")
					{
					?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="143" align="center" valign="middle" class="link_new" style="font-size:24px;text-align:center;">
					تم اضافة كتابك بنجاح <br />
					<br />
				    الرجاء انتظار موافقة المشرف عليه</td>
				  </tr>
				</table>
				   <?   
				   }  
				   ?>
	
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td align="right" class="link_new"><select name="depa_id" class="style4" id="depa_id" >
                            <? 
							
						   for($i = 0 ; $i < count($qww12); $i++){ 
						   $dataer =  $qww12[$i]
						   ?>
                            <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
                            <? } ?>
                        </select></td>
                        <td width="5" align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">القسم</td>
                      </tr>
                      
                      <tr>
                        <td align="right" class="link_new"><input name="address" id="address" dir="rtl"  type="text"  class="style4" /></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">عنوان الكتاب </td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new"><textarea name="details" cols="50" rows="15" id="details" class="style4" dir="rtl"></textarea></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">الكتاب</td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new"><form id="uploadForm1" action="‫upload_pdf.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="right"><input name="pdf" type="hidden" id="pdf" value="" />
                                    <input name="submit" type="submit" class="style4" value="pdfتحميل " /></td>
                                <td width="31%" align="right" valign="top"><input name="userImage" id="userImage11" type="file" class="style4" dir="rtl" /></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="right"><div class="link_new" id="targetLayer1"></div></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm1").on('submit',(function(e) {
								if(jQuery('#userImage11').val() == "")
								{
								 alert(" الرجاء التأكد من الملف ");
								 return false;
								}
								else
								{
									e.preventDefault();
									$.ajax({
										url: "‫upload_pdf.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											d = new Date();
											$("#targetLayer1").html("تم التحميل");
											$("#pdf").val(data);
										},
										error: function() 
										{
										} 	        
								   });
							 }
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">pdf</td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new"><form id="uploadForm2" action="upload_word.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="right"><input name="word" type="hidden" id="word" value="" />
                                    <input name="submit" type="submit" class="style4" value="wordتحميل " /></td>
                                <td width="31%" align="right" valign="top"><input name="userImage" id="userImage22" type="file" class="style4" dir="rtl" /></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="right"><div class="link_new" id="targetLayer2"></div></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm2").on('submit',(function(e) {
								if(jQuery('#userImage22').val() == "")
								{
								 alert(" الرجاء التأكد من الملف ");
								 return false;
								}
								else
								{
									e.preventDefault();
									$.ajax({
										url: "upload_word.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											d = new Date();
											$("#targetLayer2").html("تم التحميل");
											$("#word").val(data);
										},
										error: function() 
										{
										} 	        
								   });
							 }
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">word</td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new">
						<select name="book_r" id="book_r" multiple class="style4" style="width:200px;height:100px">
						  <? 
							$nvbmte = $db3->getWriters();
						   for($i = 0 ; $i < count($nvbmte); $i++){ 
						   $cvew =  $nvbmte[$i];
						   ?>
                            <option value="<? echo $cvew->id; ?>"><? echo $cvew->full_name; ?></option>
                            <? } ?>
						</select>
						</td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">(اختياري) الكتّاب المشاركين </td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new"><form id="uploadForm3" action="upload.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="27%" align="right" valign="top"><input name="pic1" type="hidden" id="pic1" value="" />
                                    <input name="submit" type="submit" class="style4" value="تحميل صورة الغلاف الأول " /></td>
                                <td width="31%" align="right" valign="top"><input name="userImage" id="userImage1" type="file" class="style4" dir="rtl" /></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="right" valign="top"><div id="targetLayer3"></div></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm3").on('submit',(function(e) {
								if(jQuery('#userImage1').val() == "")
								{
								 alert(" الرجاء التأكد من الملف ");
								 return false;
								}
								else
								{
									e.preventDefault();
									$.ajax({
										url: "upload.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											d = new Date();
											$("#targetLayer3").html("<img  height='150px'  src='"+ data +"?"+ d.getTime() +"'  />");
											$("#pic1").val(data);
										},
										error: function() 
										{
										} 	        
								   });
							}
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">(اختياري) صورة الغلاف الأول </td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new"><form id="uploadForm4" action="upload.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="27%" align="right" valign="top"><input name="pic2" type="hidden" id="pic2" value="" />
                                    <input name="submit" type="submit" class="style4" value="تحميل صورة الغلاف الثاني " /></td>
                                <td width="31%" align="right" valign="top"><input name="userImage" id="userImage2" type="file" class="style4" dir="rtl" /></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="right" valign="top"><div id="targetLayer4"></div></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm4").on('submit',(function(e) {
								if(jQuery('#userImage2').val() == "")
								{
								 alert(" الرجاء التأكد من الملف ");
								 return false;
								}
								else
								{
									e.preventDefault();
									$.ajax({
										url: "upload.php",
										type: "POST",
										data:  new FormData(this),
										contentType: false,
										cache: false,
										processData:false,
										success: function(data)
										{
											d = new Date();
											$("#targetLayer4").html("<img  height='150px'  src='"+ data +"?"+ d.getTime() +"'  />");
											$("#pic2").val(data);
										},
										error: function() 
										{
										} 	        
								   });
							  }
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new">(اختياري) صورة الغلاف الثاني </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input name="addshop" id="addshop" type="submit" class="style4" style="width:120px" value="تحميل الكتاب" />
                        <script type="text/javascript">
							
							$("#addshop").on('click', function (){
			  
					if($("#address").val() != "" && $("#details").val() != "" && $("#pdf").val() != "" && $("#word").val() != "" )
					{
					
			$("#main_div").load("upload_book.php",{  depa_id : $("#depa_id").val() , address : $("#address").val(), details : $("#details").val() , pdf : $("#pdf").val() , word : $("#word").val() , book_r : $("#book_r").val() , pic1 : $("#pic1").val() , pic2 : $("#pic2").val() , addBooks : "done"  });
									 
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
			  </td>
            </tr>
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="143" align="center" valign="middle" class="link_new" style="font-size:24px;text-align:center;">
					لا يوجد أقسام بعد </td>
				  </tr>
				</table>
<?
}
mysql_close();
?>