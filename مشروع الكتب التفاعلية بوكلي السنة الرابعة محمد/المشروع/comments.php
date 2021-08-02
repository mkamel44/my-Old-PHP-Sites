<link href="css/style.css" rel="stylesheet" type="text/css">
<?
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

?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
<?
				 				$axaxa = $db3->getComments($book_id);
								
								$ssfe = 1;
								  
								  for($i = 0 ; $i < count($axaxa); $i++)
								  { 
								  	  $ssfe = 0;
									  
									  $asca2 =  $axaxa[$i];
									  
									  $writer_data1112 = $db2->getWriterByID( $asca2->writer_id );
								   	  ?>
				 <tr>
                  <td height="23" align="right" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
				  
				   					<span class="style6">
									  <?
									
									  echo $writer_data1112->full_name;
									  
									 ?>
									 :									 </span>
									 <?
									  
									  echo $asca2->comment;
								  ?>
								  
								   <a id="ciorew<? echo $asca2->id; ?>" name="ciorew<? echo $asca2->id; ?>" style="color:#FF0000" href="#">حذف</a>
								    <script type="text/javascript">
										  $("#ciorew<? echo $asca2->id; ?>").on('click', function (){
										
													 $.ajax({
																 url: "d‫elMsg.php", 
																 data: { 
																	lolo : <? echo $asca2->id; ?>
																	   },
																		 success: function(result)
																		 {
																		 	$("#comment_div").load("comments.php",{  book_id : <? echo $book_id; ?>   });
																		 }
														});
												
										  
										  });
										</script>	
								  
								  
			       </td>
                </tr>
								  <?
								  }
				?>
</table>
<?
if( $ssfe == 1)
{
?>
<table width="100%" height="25" border="0" align="center" cellpadding="2" cellspacing="2">
				 <tr>
                  <td height="21" align="center" valign="middle" bgcolor="#FFCC00" class="link_new" style="color:#000000;font-weight:bold">
				   					<span class="style6">
									لا يوجد تعليقات بعد									</span>			       </td>
                </tr>
</table>
<?
}
mysql_close();
?>
