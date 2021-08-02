<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/writers/WriterDbase.php");

include("../../database/books/BooksDbase.php");

include("../../database/depa/DepaDbase.php");

$db1 = new WriterDbase();

$db2 = new DepaDbase();

$db = new BooksDbase();

$std = $db->getBookByID($book_id);

if($agree != "")
{
		$db->updateBookAgee($book_id,$agree);
}

if($del != "")
{
	
		$db->deleteBook($book_id);
	
		$db->deleteBook_rs($book_id);
		
		unlink($std->pdf);
		
		unlink($std->word);
			
		unlink($std->pic1);
				
		unlink($std->pic2);

}


?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
<?
if($agree != "")
{
?>
<tr>
    <td height="52" colspan="2" align="center" valign="middle"  class="style1" dir="rtl">
	تم قبول الكتاب	
	</td>
  </tr>
<?
}

if($del != "")
{
?>
<tr>
    <td height="52" colspan="2" align="center" valign="middle"  class="style1" dir="rtl">
	تم حذف الكتاب
	</td>
  </tr>
<?
}
?>


  <tr>
    <td width="73%" align="right" valign="top" class="style1"><? 
	$se = $db2->getDepaByID($std->depa_id);
	echo $se->name;
	 ?></td>
    <td width="27%" align="center" valign="middle" class="style1">القسم</td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><? 
	$zx = $db1->getWriterByID( $std->writer_id ); 
	echo $zx->full_name;
	?></td>
    <td align="center" class="style1" >الكاتب</td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><? echo $std->address; ?></td>
    <td align="center" class="style1" >عنوان الكتاب </td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><? echo $std->details; ?></td>
    <td align="center" class="style1" >الكتاب</td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><a href="<? echo $std->pdf; ?>" class="style1">pdf</a></td>
    <td align="center" class="style1" >pdf</td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><a href="<? echo $std->word; ?>" class="style1">word</a></td>
    <td align="center" class="style1" >word</td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><img  height='150px'  src='<? echo $std->pic1; ?>'  /></td>
    <td align="center" class="style1" >صورة الغلاف الأول </td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl"><img  height='150px'  src='<? echo $std->pic2; ?>' /></td>
    <td align="center" class="style1" >صورة الغلاف الثاني </td>
  </tr>
  <tr>
    <td align="right" valign="top"  class="style1" dir="rtl">
							<? 
							$zxc = $db->getBook_rs($book_id);
						  
						   for($i = 0 ; $i < count($zxc); $i++)
						   { 
								   $zxwss =  $zxc[$i];
						    
								  $eee = $db1->getWriterByID( $zxwss->writer_id ); 
								  
								  echo $eee->full_name."<br />";
						   } 
						   ?>
	</td>
    <td align="center" class="style1" >الشركاء</td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="top"  class="style1" dir="rtl">
	<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td width="50%" align="center" valign="middle" class="style1"><a href="show.php?book_id=<? echo $book_id; ?>&agree=true" class="style1">قبول</a></td>
    <td width="50%" align="center" valign="middle" class="style1"><a href="show.php?book_id=<? echo $book_id; ?>&del=true" class="style1">حذف</a></td>
  </tr>
</table>	</td>
  </tr>
</table>
<?


mysql_close();

?>