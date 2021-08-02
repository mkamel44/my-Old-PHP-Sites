<link href="css/style.css" rel="stylesheet" type="text/css">
<?
session_start();

extract($_REQUEST);

include("database/Connection.php");

include("database/depa/DepaDbase.php");

$db = new DepaDbase();

$depa_data = $db->getDepaByID($depa_id);

include("database/books/BooksDbase.php");

$db1 = new BooksDbase();

$products = $db1->getAllBooksByDepa($depa_id);

?>
<table width="100%" border="0" cellpadding="2" cellspacing="2" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td align="right" valign="bottom" class="link_new" style="color:#FFFFFF;font-weight:bold;font-size:24px">
					<table width="50%" border="0" align="left" cellpadding="5" cellspacing="5">
                      <tr>
                        <td width="56%" align="center" valign="middle" bgcolor="#FFCC00" class="style6" style="font-size:14px;">
						عدد قراء القسم 
						<?  echo $depa_data->persons_num_book; ?>
						
						</td>
                        <td width="44%" align="center" valign="middle" bgcolor="#FFCC00" class="style6" style="font-size:14px;">
						عدد الدخول 
						<?  echo $depa_data->persons_num; ?>
													<script type="text/javascript">
													 $.ajax({
															 url: "aaa.php", 
															 data: { 
																depa_id : <?  echo $depa_data->id; ?> ,
																aaa : "5"
																   },
																	 success: function(result)
																	 {
																		
																	 }
																});
			
												</script>
						
						</td>
                      </tr>
                    </table>
					<?  echo $depa_data->name; ?>					</td>
                  </tr>
                  <tr>
                    <td align="right" class="link_new"  style="color:#FFFFFF;font-weight:bold">
					<?  echo $depa_data->descr; ?>
					</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle">
			  <?
			  if(count($products) != 0)
				{
			  ?>
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <?
				for($a1=0;$a1<count($products);$a1++)
			   {
			   
			   ?>
			    <tr>
                  <td width="50%" align="right" valign="top">
				  <?
				  $products_one = $products[++$a1];
				  if($products_one != "" )
				  {
				  ?>
				  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
                          <tr>
                            <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"> <span class="style6">: اسم الكتاب</span><br />
                                  <? echo $products_one->address; ?></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><? echo $products_one->num_details; ?><span class="style6"> : عدد قراء  اولاين </span></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><? echo $products_one->num_pdf; ?><span class="style6"> :	عدد قراء  pdf </span></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><? echo $products_one->num_word; ?><span class="style6"> : عدد قراء  word </span></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"><? echo $products_one->likes; ?><span class="style6"> : عدد المعجبين </span></td>
                                </tr>
                                
                                
                            </table></td>
                            <td width="27%" rowspan="2" align="center" valign="top">
							<img src="<? 
						    if($products_one->pic1 == "")
							{
								echo "images/no.gif";
							}
							else
							{
								echo $products_one->pic1;
							}
							?>" width="162" height="220" border="0"></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                              <tr>
                                <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" ><a href="#" id="xiop<? echo $products_one->id; ?>" class="link_new" style="text-decoration:none;"><strong>قراءة الكتاب </strong></a>
                                    <? if($_SESSION["login_writer_data"] != ""){ ?>
                                    <script type="text/javascript">
								 $("#xiop<? echo $products_one->id; ?>").click(function() {
									$("#main_div").load("showBook.php",{ book_id : <? echo $products_one->id; ?>  });
								 }); 
								</script>
                                    <? }else{ ?>
                                    <script type="text/javascript">
								 $("#xiop<? echo $products_one->id; ?>").click(function() {
									alert("الرجاء تسجيل الدخول أولاً");
								 }); 
								</script>
                                    <? } ?>
                                </td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
				  <? } ?>
				  </td>
                  <td width="50%" align="right" valign="top">
				   <?
				  $products_one = $products[($a1-1)];
				  if($products_one != "" )
				  {
				  ?>
				   <table width="100%" border="0" cellspacing="2" cellpadding="2">
                     <tr>
                       <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
                         <tr>
                           <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                             <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold"> <span class="style6">: اسم الكتاب</span><br />                                 
                               <? echo $products_one->address; ?></td>
                             </tr>
							 <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
							   <? echo $products_one->num_details; ?><span class="style6"> : عدد قراء  اولاين							   </span></td>
                             </tr>
							 <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
							   <? echo $products_one->num_pdf; ?><span class="style6"> :	عدد قراء  pdf						   </span></td>
                             </tr>
							  <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
							   <? echo $products_one->num_word; ?><span class="style6"> : عدد قراء  word							   </span></td>
                             </tr>
							  <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
							   <? echo $products_one->likes; ?><span class="style6"> : عدد المعجبين 						   </span></td>
                             </tr>
                            
                           </table></td>
                           <td width="27%" rowspan="2" align="center" valign="top">
						   <img src="<? 
						    if($products_one->pic1 == "")
							{
								echo "images/no.gif";
							}
							else
							{
								echo $products_one->pic1;
							}
							?>" width="162" height="220" border="0"  ></td>
                         </tr>
                         <tr>
                           <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                             <tr>
                               <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" >
							   <a href="#" id="xiop<? echo $products_one->id; ?>" class="link_new" style="text-decoration:none;"><strong>قراءة الكتاب </strong></a>
							   <? if($_SESSION["login_writer_data"] != ""){ ?>
							    <script type="text/javascript">
								 $("#xiop<? echo $products_one->id; ?>").click(function() {
									$("#main_div").load("showBook.php",{ book_id : <? echo $products_one->id; ?>  });
								 }); 
								</script>
								<? }else{ ?>
								 <script type="text/javascript">
								 $("#xiop<? echo $products_one->id; ?>").click(function() {
									alert("الرجاء تسجيل الدخول أولاً");
								 }); 
								</script>
								<? } ?>
							   </td>
                             </tr>
                           </table></td>
                         </tr>
                       </table></td>
                     </tr>
                   </table>
			      <? } ?></td>
                </tr>
			   <?
			   }
			   ?>
              </table>
			 	 <?
				}
				else
				{
				?>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="249" align="center" class="style1">					لا يوجد كتب بعد</td>
				  </tr>
				</table>
				<?
				}
				?>

			  
			  </td>
            </tr>
</table>
		
		<?

mysql_close();
?>

