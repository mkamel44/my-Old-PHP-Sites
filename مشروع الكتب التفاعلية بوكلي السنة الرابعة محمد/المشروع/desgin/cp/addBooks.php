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

$std->depa_id = $depa_id;

$std->writer_id = $writer_id;

$std->address = $address;

$std->details = $details;

$std->pdf = $pdf;

$std->word = $word;

$std->num_details = 0;

$std->num_pdf = 0;

$std->num_word = 0;

$std->likes = 0;

$std->agree = "true";

$std->pic1 = $pic1;

$std->pic2 = $pic2;

$last_book_id = $db->addBook($std);


	for($i = 0 ; $i < count($book_r); $i++)
	{
		 $db->addBook_r($last_book_id , $book_r[$i] );
	
	}

					
?>
				
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td align="center" valign="middle" class="style1">تمت الاضافة بنجاح </td>
				  </tr>
				</table>
<?
	

}
				
				
				?>

                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td align="right" class="style1">
						<select name="depa_id" class="style2" id="depa_id" >
                          <? 
							$qww12 = $db2->getDepas();
						   for($i = 0 ; $i < count($qww12); $i++){ 
						   $dataer =  $qww12[$i]
						   ?>
                          <option value="<? echo $dataer->id; ?>"><? echo $dataer->name; ?></option>
                          <? } ?>
                        </select></td>
                        <td width="5" align="right" valign="top" class="style1">:</td>
                        <td width="199" align="right" valign="top" class="style1">القسم</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><select name="writer_id" class="style2" id="writer_id" >
                            <? 
							$qww12 = $db1->getWriters();
						   for($i = 0 ; $i < count($qww12); $i++){ 
						   $dataer =  $qww12[$i]
						   ?>
                            <option value="<? echo $dataer->id; ?>"><? echo $dataer->full_name; ?></option>
                            <? } ?>
                          </select>                        </td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">الكاتب</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><input name="address" id="address" dir="rtl"  type="text"  class="style2" /></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">عنوان الكتاب </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><textarea name="details" cols="50" rows="15" id="details" class="style2" dir="rtl"></textarea></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">الكتاب</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1">
						<form id="uploadForm1" action="‫upload_pdf.php" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="42%" align="right"><div id="targetLayer1" class="style1"></div></td>
							<td width="27%" align="right" valign="top"><input name="pdf" type="hidden" id="pdf" value="" />
						    <input name="submit" type="submit" value="pdfتحميل " /></td>
							<td width="31%" align="right" valign="top"><input dir="rtl" name="userImage" type="file" /></td>
						  </tr>
						</table>
						<script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm1").on('submit',(function(e) {
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
								}));
							});
							</script>
						</form>							</td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">pdf</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><form id="uploadForm2" action="upload_word.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="42%" align="right"><div id="targetLayer2"></div></td>
                                <td width="27%" align="right" valign="top"><input name="word" type="hidden" id="word" value="" />
                                    <input name="submit" type="submit" value="wordتحميل " /></td>
                                <td width="31%" align="right" valign="top"><input dir="rtl" name="userImage" type="file" /></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm2").on('submit',(function(e) {
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
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1">word</td>
                      </tr>
                      <tr>
                        <td align="right" class="style1">
						<select name="book_r" id="book_r" multiple class="style4" style="width:200px;height:100px">
						  <? 
							$nvbmte = $db1->getWriters();
						   for($i = 0 ; $i < count($nvbmte); $i++){ 
						   $cvew =  $nvbmte[$i]
						   ?>
                            <option value="<? echo $cvew->id; ?>"><? echo $cvew->full_name; ?></option>
                            <? } ?>
						</select>
						</td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1"><span class="link_new">(اختياري)</span>الكتّاب المشاركين </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><form id="uploadForm3" action="upload.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="42%" align="right"><div id="targetLayer3"></div></td>
                                <td width="27%" align="right" valign="top"><input name="pic1" type="hidden" id="pic1" value="" />
                                    <input name="submit" type="submit" value="تحميل صورة الغلاف الأول " /></td>
                                <td width="31%" align="right" valign="top"><input dir="rtl" name="userImage" type="file" /></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm3").on('submit',(function(e) {
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
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1"><span class="link_new">(اختياري)</span>صورة الغلاف الأول </td>
                      </tr>
                      <tr>
                        <td align="right" class="style1"><form id="uploadForm4" action="upload.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="42%" align="right"><div id="targetLayer4"></div></td>
                                <td width="27%" align="right" valign="top"><input name="pic2" type="hidden" id="pic2" value="" />
                                    <input name="submit" type="submit" value="تحميل صورة الغلاف الثاني " /></td>
                                <td width="31%" align="right" valign="top"><input dir="rtl" name="userImage" type="file" /></td>
                              </tr>
                            </table>
                          <script type="text/javascript">
							$(document).ready(function (e) {
								$("#uploadForm4").on('submit',(function(e) {
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
								}));
							});
							</script>
                        </form></td>
                        <td align="right" valign="top" class="style1">:</td>
                        <td align="right" valign="top" class="style1"><span class="link_new">(اختياري)</span>صورة الغلاف الثاني </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input style="width:50px" name="addshop" id="addshop" type="submit" class="style2" value="اضافة" />
                           
                            <script type="text/javascript">
							
							$("#addshop").on('click', function (){
			  
					if($("#address").val() != "" && $("#details").val() != "" && $("#pdf").val() != "" && $("#word").val() != ""  )
					{
					
			$("#main_div").load("addBooks.php",{  depa_id : $("#depa_id").val() , writer_id : $("#writer_id").val() , address : $("#address").val(), details : $("#details").val() , pdf : $("#pdf").val() , word : $("#word").val() , book_r : $("#book_r").val() , pic1 : $("#pic1").val() , pic2 : $("#pic2").val() , addBooks : "done"  });
									 
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