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

$group_id = $db->addGroups($book_id);
			
	for($i = 0 ; $i < count($book_r); $i++)
	{
		 $db->addGroup_writer($group_id , $book_r[$i] );
	
	}

 $db->addGroup_writer($group_id , $_SESSION["login_writer_data"] );

$done_msg = "done";	


}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#7A0309">
                  <tr>
                    <td align="right" class="style3">دعوة قراءة كتاب </td>
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
					تم طلب الدعوة بنجاح </td>
				  </tr>
				</table>
				   <?   
				   }  
				   ?>
	
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="948" align="right" class="link_new">
						<select name="book_id" class="style4" id="book_id" >
                            <? 
							
							$mybooks = $db->getAllBooksByWriters($_SESSION["login_writer_data"]);
							
						   for($i = 0 ; $i < count($mybooks); $i++){ 
						   $dataer =  $mybooks[$i]
						   ?>
                            <option value="<? echo $dataer->id; ?>"><? echo $dataer->address; ?></option>
                            <? } ?>
                        </select></td>
                        <td width="5" align="right" valign="top" class="link_new">:</td>
                        <td width="254" align="right" valign="top" class="link_new">الكتب</td>
                      </tr>
                      <tr>
                        <td align="right" class="link_new">
						<select name="book_r" id="book_r" multiple class="style4" style="width:200px;height:100px">
						  <? 
							$nvbmte = $db3->getWriters();
						   for($i = 0 ; $i < count($nvbmte); $i++)
						   { 
						   
							   $cvew =  $nvbmte[$i];
							   
						   if($cvew->id != $_SESSION["login_writer_data"])
						   {
						   ?>
                            <option value="<? echo $cvew->id; ?>"><? echo $cvew->full_name; ?></option>
                            <? }} ?>
						</select>						</td>
                        <td align="right" valign="top" class="link_new">:</td>
                        <td align="right" valign="top" class="link_new"> المشتركين في الدعوة </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input name="addshop" id="addshop" type="submit" class="style4" style="width:120px" value="طلب الدعوة" />
                        <script type="text/javascript">
							
							$("#addshop").on('click', function (){
			  
					if($("#book_r").val() != "" )
					{
					
			$("#main_div").load("send_groups.php",{  book_id : $("#book_id").val() , book_r : $("#book_r").val() , addBooks : "done"  });
									 
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

mysql_close();
?>