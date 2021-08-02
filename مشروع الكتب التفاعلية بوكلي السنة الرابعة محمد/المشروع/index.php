<?
session_start();

extract($_REQUEST);

if($log == "out")
{

   $_SESSION["login_writer_show"] = false;
				
   $_SESSION["login_writer_data"] = "";

?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='index.php';
	</script>
<?
	exit();
}

include("database/Connection.php");

include("database/depa/DepaDbase.php");

$depa_db = new DepaDbase();

include("database/writers/WriterDbase.php");

$writer_db = new WriterDbase();

		
if($writer_login == "تسجيل الدخول")
{

$writer_data = $writer_db->checkWriter( $code,$password );

			if( $writer_data != 0)
			{
			    $_SESSION["login_writer_show"] = true;

				$_SESSION["login_writer_data"] = $writer_data;
				
			}
			else
			{
				$log_writer_err = true;
			}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<title>.:: Bookly ::.</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">

          <table width="100%" height="43" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="64%"><table width="50%" border="0" align="right" cellpadding="5" cellspacing="5">
                <tr>
                  <td width="19%" align="center" valign="middle" class="style2">
				   <a href="#" id="a4">الوثوقية </a>
				   <script type="text/javascript">
					 $("#a4").click(function() {
						$("#main_div").load("a4.php");
					 }); 
					 </script>	
	 			  </td>
                  <td width="23%" align="center" valign="middle" class="style2">
				   <a href="#" id="a3" >فريقنا </a>
		          <script type="text/javascript">
					 $("#a3").click(function() {
						$("#main_div").load("a3.php");
					 }); 
					 </script>	</td>
                  <td width="20%" align="center" valign="middle" class="style2">
				   <a href="#" id="a2" >من نحن </a>
			      <script type="text/javascript">
					 $("#a2").click(function() {
						$("#main_div").load("a2.php");
					 }); 
					 </script>	</td>
                  <td width="38%" align="center" valign="middle" class="style2">
				   <a href="#" id="a1" >الصفحة الرئيسية </a>
			      <script type="text/javascript">
					 $("#a1").click(function() {
						$("#main_div").load("a1.php");
					 }); 
					 </script>	</td>
                </tr>
              </table>    	</td>
            </tr>
      </table>

  </div> <!-- end of menu -->
    
  <div id="templatemo_header">
    <table width="100%" height="259" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="45%" align="center" style="font-family:Geneva;"><span class="style1" style="font-family:Geneva;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#999999;font-family:Geneva;text-decoration:none">Bookly</a></span></td>
        <td width="55%" align="center">
		
			<?
				if( $_SESSION["login_writer_show"] == false)
				{
			  
			?>
		<form id="form1" name="form1" method="post" action="">
          <table width="57%" border="0" cellspacing="3" cellpadding="3">
		       <?
				if($log_writer_err == true)
				{
				?>
                        <tr>
                          <td colspan="3" align="center" valign="middle" class="link_new"><strong>الاسم و كلمة السر خطأ </strong></td>
                        </tr>
                        <?
				}
				?>
		   <tr>
              <td height="16" colspan="3" align="center" valign="middle" class="link_new"><strong>:: تسجيل الدخول :: </strong></td>
            </tr>
            <tr>
              <td width="59%" align="center" valign="middle" class="link_new"><input name="code" type="text" class="style4" id="code" style="text-align:center;width:150px;" /></td>
              <td width="2%" align="center" valign="middle" class="link_new"><strong>:</strong></td>
              <td width="39%" align="center" valign="middle" class="link_new"><strong>الاســـــــم</strong></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="link_new"><input name="password" type="password" class="style4" id="password"  style="text-align:center;width:150px;" /></td>
              <td align="center" valign="middle" class="link_new"><strong>:</strong></td>
              <td align="center" valign="middle" class="link_new"><strong>كلمة المرور </strong></td>
            </tr>
            <tr>
              <td height="16" colspan="3" align="center" valign="middle" class="link_new"><table width="100%" border="0" cellspacing="5" cellpadding="2">
                <tr>
                  <td width="49%" align="center" valign="middle">
				  <input name="writer_login" type="submit" class="style4" id="writer_login" value="تسجيل الدخول" />
				  </td>
                  <td width="51%" align="center" valign="middle">
				   <a href="#" id="a5" style="text-decoration:none">تسجيل جديد </a>
				   <script type="text/javascript">
					 $("#a5").click(function() {
						$("#main_div").load("register.php");
					 }); 
					 </script>	
				  </td>
                </tr>
              </table></td>
              </tr>
          </table>
	      </form>
		     <?
				}
				else
				{
				?>
				<table width="100%" border="0" cellspacing="3" cellpadding="3">
		   <tr>
              <td width="100%" height="32" align="center" valign="middle" class="link_new" >
			  
			  <strong>  اهلا وسهلا بالكاتب
			  <span class="style6">
			  <? 
			   $cscve = $writer_db->getWriterByID($_SESSION["login_writer_data"]);
			   echo $cscve->full_name; 
			   ?>
			   </span>
			   </strong>
			   
			   </td>
            </tr>
            <tr>
              <td height="16" align="center" valign="middle" class="link_new"><table width="90%" height="79" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="31%" align="center">
				    <a href="#" id="a6" style="text-decoration:none"> كتبي المحملة</a>
				    <script type="text/javascript">
					 $("#a6").click(function() {
						$("#main_div").load("showBooks1.php",{ writer_id : <? echo $_SESSION["login_writer_data"]; ?>  });
					 }); 
					 </script>				  </td>
                  <td width="34%" align="center">
                    <a href="#" id="a7" style="text-decoration:none">تـحـمـيـل كـتـاب </a>
					<script type="text/javascript">
					 $("#a7").click(function() {
						$("#main_div").load("upload_book.php");
					 }); 
					 </script>					</td>
                  <td width="35%" align="center">
				    <a href="#" id="a9" style="text-decoration:none">دعوة لقراءة كتابي</a>
				  <script type="text/javascript">
					 $("#a9").click(function() {
						$("#main_div").load("send_groups.php");
					 }); 
					 </script>				  </td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?log=out" style="text-decoration:none">تسجيل الخروج</a></td>
                  <td align="center">
				  <a href="#" id="a8" style="text-decoration:none">ملفي الشخصي</a>
				  <script type="text/javascript">
					 $("#a8").click(function() {
						$("#main_div").load("update_register.php");
					 }); 
					 </script>				  </td>
                  <td align="center">
				   <a href="#" id="a10" style="text-decoration:none">عرض دعوات القراء</a>
				   <script type="text/javascript">
					 $("#a10").click(function() {
						$("#main_div").load("showBooks2.php",{ writer_id : <? echo $_SESSION["login_writer_data"]; ?>  });
					 }); 
					 </script>				  </td>
                </tr>
              </table></td>
              </tr>
          </table>
				
				<?
				}
				?>  
		     
          <p>&nbsp;</p>
          <p>&nbsp;</p>
	    </td>
      </tr>
    </table>
  </div> 
    <!-- end of header -->
    
    <div id="templatemo_content">
    	
      <div id="templatemo_content_left">
        <div class="templatemo_content_left_section">
          <h1 align="center">الأقسام</h1>
          <ul>
            <li>
              <table width="100%" border="0" cellspacing="2" cellpadding="0">
							<?
							$all_depa_here = 0;
							
							$all_depa = $depa_db->getDepas();

							  for($i = 0 ; $i < count($all_depa); $i++)
							  { 
							  
							   $ascv =  $all_depa[$i];
							   
							   $all_depa_here = 1;
						   ?>
						    <tr>
							  <td height="23" align="center" class="link_new" style="font-size:18px">
							  <strong>
							  <a href="#" id="ascc<? echo $ascv->id; ?>"><? echo $ascv->name; ?></a>
							      <script type="text/javascript">
								 $("#ascc<? echo $ascv->id; ?>").click(function() {
									$("#main_div").load("showBooks.php",{ depa_id : <? echo $ascv->id; ?>  });
								 }); 
								</script>
							  </strong>
							  </td>
							</tr>
                            <? 
								} 
								
							if($all_depa_here == 0)
							{
							?>
							 <tr>
							  <td height="23" align="center" class="link_new"><strong>لا يوجد أقسام بعد</strong></td>
							</tr>
							<?
							}
							?>
               
              </table>
            </li>
          </ul>
        </div>
        <div class="templatemo_content_left_section">
          <h1 align="center">الكتّاب</h1>
          <ul>
            <li>
              <table width="100%" border="0" cellpadding="0" cellspacing="2">
               	<?
							$all_writers_here = 0;
							
							$all_writers = $writer_db->getWriters();

							  for($i = 0 ; $i < count($all_writers); $i++)
							  { 
							  
							   $ctoo =  $all_writers[$i];
							   
								   if($writer_db->checkWriterBooks($ctoo->id))
								   {
								   		$all_writers_here = 1;
						   ?>
						    <tr>
							  <td height="23" align="center" class="link_new">
							  <strong>
							  <a href="#" id="vbmm<? echo $ctoo->id; ?>"><? echo $ctoo->full_name; ?></a>
							    <script type="text/javascript">
								 $("#vbmm<? echo $ctoo->id; ?>").click(function() {
									$("#main_div").load("showBooks1.php",{ writer_id : <? echo $ctoo->id; ?>  });
								 }); 
								</script>
							  </strong>
							  </td>
							</tr>
                            <? 
								   }
								} 
								
							if($all_writers_here == 0)
							{
							?>
							 <tr>
							  <td height="23" align="center" class="link_new"><strong>لا يوجد كتّاب بعد</strong></td>
							</tr>
							<?
							}
							?>
              </table>
            </li>
          </ul>
        </div>
      </div>
        <!-- end of content left -->
      <div id="templatemo_content_right">
	  <div id="main_div">
	   <script type="text/javascript">
		$("#main_div").load("a1.php");
		</script>	
	  </div>
	  </div> 
       
    </div> <!-- end of content -->
    
    <div id="templatemo_footer"><em><span class="style5">bookly co</span><strong dir="ltr"> جميع الحقوق محفوظة لموقع </strong>  </em></div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<div align=center></div>
</body>
</html>
<?
mysql_close();
?>