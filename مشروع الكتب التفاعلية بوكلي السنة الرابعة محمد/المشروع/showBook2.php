<link href="css/style.css" rel="stylesheet" type="text/css">
<?
session_start();

extract($_REQUEST);

include("database/Connection.php");

include("database/depa/DepaDbase.php");

$db = new DepaDbase();

include("database/books/BooksDbase.php");

$db1 = new BooksDbase();

include("database/writers/WriterDbase.php");

$db2 = new WriterDbase();

include("database/comments/CommentsDbase.php");

$db3 = new CommentsDbase();

$products = $db1->getBookByID($book_id);

?>
<table width="100%" border="0" cellpadding="2" cellspacing="2" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td height="35" align="right" class="link_new" style="color:#FFFFFF;font-weight:bold"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="22%" align="center">&nbsp;</td>
                        <td width="78%" align="right"><span class="link_new" style="color:#FFFFFF;font-weight:bold;font-size:22px" dir="rtl">
                         اسم الكتاب :  <?  echo $products->address; ?>
                        </span></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td align="right" class="link_new"  style="color:#FFFFFF;font-weight:bold"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td width="72%" height="211" align="right" valign="top"><br />
                          <table width="100%" border="0" cellspacing="5" cellpadding="5">
                            <tr>
                              <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><span class="style6">اسم الكتّاب  :</span>                                <? 
								   $writer_data = $db2->getWriterByID($products->writer_id);
					
								   echo $writer_data->full_name;
								   ?></td>
                            </tr>
							 <tr>
                              <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold" dir="rtl">
							      <span class="style6">اسم الكتّاب المشاركين  :</span> 
							    <? 
								  
								  $nvbmte = $db1->getBook_rs($book_id);
								  
								  for($i = 0 ; $i < count($nvbmte); $i++)
								  { 
								  
									  $cvew =  $nvbmte[$i];
									  
									  $writer_data11 = $db2->getWriterByID( $cvew->writer_id );
					
									  if($i != 0)
									  {
									 	echo  " - ";
									  }
								   	  
									  echo $writer_data11->full_name;
								  
								  }
									
								  ?>							   </td>
                            </tr>
							 <tr>
                              <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"> <span class="style6">
							  اسم القسم : </span>                                <span class="link_new" style="color:#000000;font-weight:bold">
                              <? 
								   $depa_data = $db->getDepaByID($products->depa_id);
					
								   echo $depa_data->name;
								   ?>
                              </span></td>
                            </tr>
                            <tr>
                              <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="21%" align="right"><span class="link_new" style="color:#000000;font-weight:bold"><? echo $products->num_word; ?><span class="style6"> :    word</span> </span></td>
                                  <td width="20%" align="right"><span class="link_new" style="color:#000000;font-weight:bold"><? echo $products->num_pdf; ?> <span class="style6">:	   pdf </span></span></td>
                                  <td width="29%" align="right"><span class="link_new" style="color:#000000;font-weight:bold"><? echo $products->num_details; ?> <span class="style6">:    اولاين</span> </span></td>
                                  <td width="30%" align="right"><span class="link_new" style="color:#000000;font-weight:bold"><? echo $products->likes; ?> <span class="style6">:  المعجبين </span></span></td>
                                </tr>
                              </table></td>
                            </tr>
                        </table></td>
                        <td width="14%" rowspan="2" align="center" valign="top">
						صورة الغلاف الثاني
						<img style="padding-top: 10px;" src="<? 
						    if($products->pic2 == "")
							{
								echo "images/no.gif";
							}
							else
							{
								echo $products->pic2;
							}
							?>" width="162" height="220" border="0"></td>
                        <td width="14%" rowspan="2" align="center" valign="top">
						صورة الغلاف الأول
						<img style="padding-top: 10px;" src="<? 
						    if($products->pic1 == "")
							{
								echo "images/no.gif";
							}
							else
							{
								echo $products->pic1;
							}
							?>" width="162" height="220" border="0" /></td>
                      </tr>
                      <tr>
                        <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="50%"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                              <tr>
                                <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" >
								<a href="<? echo $products->word; ?>" id="num_word" name="num_word" class="link_new" style="text-decoration:none;"><strong>تحميل الكتاب word </strong></a>
								 <script type="text/javascript">
									  $("#num_word").on('click', function (){
												 $.ajax({
															 url: "aaa.php", 
															 data: { 
																book_id : <?  echo $book_id; ?> ,
																depa_id : <?  echo $products->depa_id; ?> ,
																aaa : "2"
																   },
																	 success: function(result)
																	 {
																		
																	 }
													});

									  });
									</script>
								 </td>
                              </tr>
                            </table></td>
                            <td width="50%"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                              <tr>
                                <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" >
								<a href="<? echo $products->pdf; ?>"  id="num_pdf" name="num_pdf" class="link_new" style="text-decoration:none;"><strong>تحميل الكتاب pdf </strong></a> 
								 <script type="text/javascript">
									  $("#num_pdf").on('click', function (){
												 $.ajax({
															 url: "aaa.php", 
															 data: { 
																book_id : <?  echo $book_id; ?> ,
																depa_id : <?  echo $products->depa_id; ?> ,
																aaa : "1"
																   },
																	 success: function(result)
																	 {
																		
																	 }
													});

									  });
									</script>
								</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>                        </td>
                      </tr>
                      
                    </table></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="right" valign="middle">
			  <div style="overflow-y: scroll; height:300px;padding:10px 10px;text-align:justify">
			  <span class="link_new" style="color:#FFFFFF;font-weight:bold">
			   <script type="text/javascript">
												 $.ajax({
															 url: "aaa.php", 
															 data: { 
																book_id : <?  echo $book_id; ?> ,
																depa_id : <?  echo $products->depa_id; ?> ,
																aaa : "3"
																   },
																	 success: function(result)
																	 {
																		
																	 }
													});

									</script>
			    <?  echo $products->details; ?>
			  </span>			  </div>			  </td>
            </tr>
			  <tr>
              <td align="right" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" >
						<a href="#"  id="likes" name="likes" class="link_new" style="text-decoration:none;"><strong>أعجبني  الكتاب </strong></a>
						 <script type="text/javascript">
									  $("#likes").on('click', function (){
												 $.ajax({
															 url: "aaa.php", 
															 data: { 
																book_id : <?  echo $book_id; ?> ,
																depa_id : <?  echo $products->depa_id; ?> ,
																aaa : "4"
																   },
																	 success: function(result)
																	 {
																		alert("تم الاعجاب بنجاح");
																	 }
													});

									  });
									</script>
						 </td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                <tr>
                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#FF0000;font-weight:bold">التعليقات</td>
                </tr>
				<tr>
                  <td align="right" valign="top" bgcolor="#FFCC00" class="link_new" style="color:#FF0000;font-weight:bold">
				  <div style="width: 100%;overflow: auto;" id="comment_div" dir="rtl" >
				    <div align="center" style="font-size:16px">لا يوجد تعليقات بعد </div>
				  </div>
				  <script type="text/javascript">
						$("#comment_div").load("comments2.php",{  group_id : <? echo $group_id; ?>   });
					</script>				  </td>
                </tr>
				<tr>
                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#FF0000;font-weight:bold"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td width="90%" align="right" valign="top" class="style6"><textarea name="text1" cols="70" rows="7" id="text1" class="style4" dir="rtl"></textarea>					  </td>
                      <td width="10%" align="right" valign="top" class="style6">التعليق</td>
                    </tr>
					
                    <tr>
                      <td align="right" valign="top" class="style6">
					  <input name="send" id="send" type="submit" class="style4" style="width:90px" value="اضافة تعليق" />
					   <script type="text/javascript">
			  $("#send").on('click', function (){
			
					if($("#text1").val() != "")
					{
						 $.ajax({
									 url: "setMsg2.php", 
									 data: { 
										writer_id : <?  echo $_SESSION["login_writer_data"]; ?> ,
										group_id : <?  echo $group_id; ?> ,
										msg : $("#text1").val()
										   },
											 success: function(result)
											 {
												$("#text1").val("");
												$("#comment_div").load("comments2.php",{  group_id : <? echo $group_id; ?>   });
											 }
							});
					}
			  
			  });
			</script>					  </td>
                      <td align="right" valign="top" class="style6">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          
</table>
		
		<?

mysql_close();
?>

