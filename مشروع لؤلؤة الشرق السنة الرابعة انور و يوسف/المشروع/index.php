<?
session_start();

extract($_REQUEST);

if($log == "out")
{

   $_SESSION["login_cards_show"] = false;
				
	$_SESSION["login_cards_data"] = "";

?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='index.php';
	</script>
<?
	exit();
}

include("database/Connection.php");

include("database/supervisor/SupervisorDbase.php");

$asc = new SupervisorDbase();

include("database/cards/CardsDbase.php");

$card_db = new CardsDbase();


		
if($card_login == "تسجيل الدخول")
{

$card_data = $card_db->checkCard( $code,$password );

			if( $card_data != 0)
			{
			    $_SESSION["login_cards_show"] = true;
				
				$_SESSION["login_cards_data"] = $card_data;
				
			}
			else
			{
				$log_card_err = true;
			}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="datetime/jquery.plugin.js"></script>
<script src="datetime/jquery.datetimeentry.js"></script>
<title>::لؤلؤة الشرق ::</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="datetime/jquery.datetimeentry.css" rel="stylesheet" type="text/css" />
<script>
var snack_ids = new Array();
var snack_prices = new Array();

function add_snack(tag_here)
{

		var snack_id = $(tag_here).attr("key");
						
		var snack_name = $(tag_here).attr("key1");
		
		var snack_price = $(tag_here).attr("key2");

		snack_ids.push(snack_id);
		
		snack_prices.push(snack_price);
		
		$('#basket_data').append("<tr id='tr_"+snack_id+"'><td width='18%' align='center' valign='middle' class='style3'><input name='del"+snack_id+"' key='"+snack_id+"' onclick='delete_snack(this);' type='submit'  id='del"+snack_id+"' value='حذف' /></td><td width='64%' align='center' valign='middle'class='style3'>"+snack_name+"</td></tr>");
		
		get_all_prices();
		
}

function delete_snack(tag_here)
{
	var snack_id = $(tag_here).attr("key");

	remove_at(snack_ids,snack_prices,snack_id);

	$("#tr_"+snack_id).remove();
	
	get_all_prices();

}

function remove_at(arr , arr2 , itemm) 
{
    for (var i = arr.length; i--;)
	 {
        if (arr[i] === itemm) 
		{
            arr.splice(i, 1);
			arr2.splice(i, 1);
			return; 
        }
    }
}

function get_all_prices() 
{
	var ii = 0;

    for (var i = 0 ; i < snack_prices.length ; i++)
	 {
        ii = Number(snack_prices[i]) + Number(ii);
     }
	 
	 $("#mony").val(ii);
}


</script>
</head>
<body>
<div id="templatemo_container">
	<!-- Free Website Template by www.TemplateMo.com -->
  <div id="templatemo_header">
    <table width="100%" height="119" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32%" align="center" valign="top"><table width="200" border="0" cellpadding="1" cellspacing="1">
              <tr>
                <td align="right" valign="top">
				<input name="card_id" id="card_id" type="hidden" value="<? echo $_SESSION["login_cards_data"]; ?>" />
				<?
			  	if( $_SESSION["login_cards_show"] == false)
				{
			  
			  ?>
                    <form id="form1" name="form1" method="post" action="">
                      <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <?
				if($log_card_err == true)
				{
				?>
                        <tr>
                          <td colspan="3" align="center" valign="middle" class="lolo1">الكود و كلمة السر خطأ </td>
                        </tr>
                        <?
				}
				?>
                        <tr>
                          <td colspan="3" align="center" valign="middle" class="lolo1">تسجيل الدخول </td>
                        </tr>
                        <tr>
                          <td width="135"  align="right" valign="middle" class="lolo1"><input name="code" type="text" class="lolo2" id="code" style="height:15px;width:120px;text-align:center;margin-bottom:2px" /></td>
                          <td width="12" align="right" valign="middle" class="lolo1">:</td>
                          <td width="53" align="right" valign="middle" class="lolo1">الكود</td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle" class="lolo1"><input name="password" type="password" class="lolo2" id="password"   style="height:15px;width:120px;text-align:center;margin-bottom:2px"/></td>
                          <td align="right" valign="middle" class="lolo1">:</td>
                          <td align="right" valign="middle" class="lolo1">كلمة السر </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center" valign="middle" class="lolo1"><input name="card_login" type="submit" class="lolo2" id="card_login" value="تسجيل الدخول" style="height:20px;width:80px" /></td>
                        </tr>
                      </table>
                    </form>
                  <?
				}
				else
				{
				?>
                    <table width="200" border="0" cellpadding="1" cellspacing="1">
                      <tr>
                        <td colspan="3" align="center" class="lolo1">المشتركين</td>
                        </tr>
                      <tr>
                        <td width="95" align="center" class="lolo1">
						<?
							$lololo = $_SESSION["login_cards_data"] ;
							
							$lolo = $card_db->getCardByID($lololo);
							
							echo $lolo->customer_name;
						?>						</td>
                        <td width="5" align="right" class="lolo1">:</td>
                        <td width="90" align="right" class="lolo1">اسم الزبون </td>
                      </tr>
                      <tr>
                        <td align="center" class="lolo1">
						<div id="remaining_balance_data" name="remaining_balance_data">
						<script type="text/javascript">
									 $.ajax({
									 url: "remaining_balance_data.php", 
									 data: { 
										card_id : $("#card_id").val()
										   },
									 success: function(result)
									 {
									 			if(result == "no")
										{
									 		window.location='index.php?log=out';
									  	}
										else
										{
									 		$('#remaining_balance_data').html(result);
										}
										
									 }
										  });
								</script>
						</div>
	 <script type="text/javascript">
					 setInterval(
								function ()
								{
									 $.ajax({
									 url: "remaining_balance_data.php", 
									 data: { 
										card_id : $("#card_id").val()
										   },
									 success: function(result)
									 {
									 			if(result == "no")
										{
									 		window.location='index.php?log=out';
									  	}
										else
										{
									 		$('#remaining_balance_data').html(result);
										}
										
									 }
										  });
								}
								,10000
							    );
			</script>                      
						</td>
                        <td align="right" class="lolo1">:</td>
                        <td align="right" class="lolo1">الرصيد المتبقي </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center" class="lolo1">                       
				            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="51%" align="center" valign="middle">
								<input name="logout" type="submit" class="lolo2" id="logout" value="تسجيل الخروج" style="height:20px;width:80px" />
								<script type="text/javascript">
							   $("#logout").click(function() {
								 window.location='index.php?log=out';
							   }); 
							  </script>
								</td>
                                <td width="49%" align="center" valign="middle">
								<input name="statistics" type="submit" class="lolo2" id="statistics" value="الحجوزات" style="height:20px;width:80px" />
									<script type="text/javascript">
								 $("#statistics").click(function() {
									 $("#main_div").load("statistics.php",{ card_id : $("#card_id").val() });
								   }); 
							  </script>
								</td>
                              </tr>
                            </table></td>
                      </tr>
                    </table>
                  <?
				}
				?>                </td>
              </tr>
            </table></td>
            <td width="46%" align="right" valign="top"><table width="344" border="0" align="left" cellpadding="2" cellspacing="2">
              <tr>
                <td width="336" align="center"><a href="index.php"><img src="images/Untitled-4.png" width="321" height="91" border="0" /></a></td>
              </tr>
              <tr>
                <td align="center"><a href="index.php"><img src="images/Untitled-5.png" width="296" height="13" /></a></td>
              </tr>
            </table></td>
            <td width="22%" align="center" valign="top">&nbsp;</td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
  </div> 
    <!-- end of header -->
    
  <div id="templatemo_banner">
    <table width="61%" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td width="14%" height="38" align="center" valign="middle">
			<div class="dropdown5">
					<a href="#" class="dropbtn5">المول</a>
						<div class="dropdown5-content">
								   <a href="#" id="link20">ألبسة</a> 
								     <script type="text/javascript">
								   $("#link20").click(function() {
									 $("#main_div").load("mall.php",{  ShopID : "1"  });
								   }); 
								  </script>
								   <a href="#" id="link21">اكسسوار</a>
								     <script type="text/javascript">
								   $("#link21").click(function() {
									 $("#main_div").load("mall.php",{  ShopID : "2"  });
								   }); 
								  </script>
								   <a href="#" id="link22">غذائيات</a>
								     <script type="text/javascript">
								   $("#link22").click(function() {
									 $("#main_div").load("mall.php",{  ShopID : "3"  });
								   }); 
								  </script>
						</div>
		  </div>
		</td>
        <td width="16%" align="center" valign="middle">
		<div class="dropdown4">
					<a href="#" class="dropbtn4">المطاعم</a>
						<div class="dropdown4-content">
								   <a href="#" id="link8">كفتيريا</a> 
								     <script type="text/javascript">
								   $("#link8").click(function() {
									 $("#main_div").load("aa3.php",{ ids : "8" , ax : "3"  });
								   }); 
								  </script>
								   <a href="#" id="link9">مطاعم</a>
								     <script type="text/javascript">
								   $("#link9").click(function() {
									 $("#main_div").load("aa3.php",{ ids : "9" , ax : "3"  });
								   }); 
								  </script>
						</div>
		  </div>
		</td>
        <td width="15%" align="center" valign="middle">
		<div class="dropdown3">
					<a href="#" class="dropbtn3">الفنادق</a>
						<div class="dropdown3-content"> 
								    <a href="#" id="link14">خمسة نجوم مزوج</a> 
								     <script type="text/javascript">
								   $("#link14").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "14" , ax : "5"  });
								   }); 
								  </script>
								   <a href="#" id="link15">خمسة نجوم مفرد</a> 
								     <script type="text/javascript">
								   $("#link15").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "15" , ax : "5"  });
								   }); 
								  </script>
								     <a href="#" id="link16">ثلاث نجوم مزوج</a> 
								     <script type="text/javascript">
								   $("#link16").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "16" , ax : "5"  });
								   }); 
								  </script>
								    <a href="#" id="link17">ثلاث نجوم مفرد</a> 
								     <script type="text/javascript">
								   $("#link17").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "17" , ax : "5"  });
								   }); 
								  </script>
								   <a href="#" id="link18">نجمة واحدة مزوج</a> 
								     <script type="text/javascript">
								   $("#link18").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "18" , ax : "5"  });
								   }); 
								  </script>
								    <a href="#" id="link19">نجمة واحدة مفرد</a> 
								     <script type="text/javascript">
								   $("#link19").click(function() {
									 $("#main_div").load("aa2.php",{ ids : "19" , ax : "5"  });
								   }); 
								  </script>
						</div>
		  </div>
		</td>
        <td width="23%" align="center" valign="middle">
		<div class="dropdown2">
					<a href="#" class="dropbtn2">الصالات الرياضية</a>
						<div class="dropdown2-content">
								   <a href="#" id="link10">صالة البلياردو</a> 
								     <script type="text/javascript">
								   $("#link10").click(function() {
									 $("#main_div").load("aa1.php",{ ids : "10" , ax : "4"  });
								   }); 
								  </script>
								   <a href="#" id="link11">كرة القدم</a>
								   <script type="text/javascript">
								   $("#link11").click(function() {
									 $("#main_div").load("aa1.php",{ ids : "11" , ax : "4"  });
								   }); 
								  </script>
								   <a href="#" id="link12">كرة السلة</a>
								   <script type="text/javascript">
								   $("#link12").click(function() {
									 $("#main_div").load("aa1.php",{ ids : "12" , ax : "4"  });
								   }); 
								  </script>
								   <a href="#" id="link13">بلي ستيشن</a>
								   <script type="text/javascript">
								   $("#link13").click(function() {
									 $("#main_div").load("aa1.php",{ ids : "13" , ax : "4"  });
								   }); 
								  </script>
						</div>
		  </div>
		</td>
        <td width="11%" align="center" valign="middle">
		<div class="dropdown1">
					<a href="#" class="dropbtn1">المسابح</a>
						<div class="dropdown1-content">
								   <a href="#"  id="link5">مسبح اناث</a> 
								     <script type="text/javascript">
								   $("#link5").click(function() {
									 $("#main_div").load("aa.php",{ ids : "5" , ax : "2"  });
								   }); 
								  </script>
								   <a href="#"  id="link6">مسبح ذكور</a>
								     <script type="text/javascript">
								   $("#link6").click(function() {
									 $("#main_div").load("aa.php",{ ids : "6" , ax : "2"  });
								   }); 
								  </script>
								   <a href="#"  id="link7">مسبح عائلات</a>
								     <script type="text/javascript">
								   $("#link7").click(function() {
									 $("#main_div").load("aa.php",{ ids : "7"  , ax : "2"  });
								   }); 
								  </script>
						</div>
		  </div>
		</td>
        <td width="21%" align="center" valign="middle">
		  <div class="dropdown">
					<a href="#" class="dropbtn">العاب الأطفال</a>
			<div class="dropdown-content">
								   <a href="#" id="link1">مرجيح</a> 
								   <script type="text/javascript">
								   $("#link1").click(function() {
									 $("#main_div").load("aa.php",{ ids : "1" , ax : "1" });
								   }); 
								  </script>
								   <a href="#" id="link2">زحليطات</a>
								    <script type="text/javascript">
								   $("#link2").click(function() {
									 $("#main_div").load("aa.php",{ ids : "2" , ax : "1"  });
								   }); 
								  </script>
								   <a href="#" id="link3">سفينة</a>
								    <script type="text/javascript">
								   $("#link3").click(function() {
									 $("#main_div").load("aa.php",{ ids : "3" , ax : "1"  });
								   }); 
								  </script>
								   <a href="#" id="link4">قلابات</a> 
								    <script type="text/javascript">
								   $("#link4").click(function() {
									 $("#main_div").load("aa.php",{ ids : "4" , ax : "1"  });
								   }); 
								  </script>
			</div>
		  </div>
		</td>
      </tr>
    </table>
  </div> 
    <!-- end of banner -->
    <div id="templatemo_footer">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
		<?
		    $ssss = $asc->getNews();
			
			if(count($ssss) > 0)
			{
			?>
  <tr>
    <td height="31" align="center" valign="middle" class="lolo1">
	<marquee direction="left" class="lolo1" onMouseOver="this.stop();" onMouseOut="this.start();" dir="rtl">
    <?
					 for($a1=0;$a1<count($ssss);$a1++)
					{
					 $ssss_one = $ssss[$a1];
					
						?>
				 &nbsp;&nbsp; <img src="images/Untitled-4.png" width="70" height="25" style="margin-top:10px" /> &nbsp;&nbsp; <a href="#" id="<? echo $a1; ?>_111" class="style435"  style="color:#FFFFFF"><? echo $ssss_one->name; ?> </a>
				
                  <script type="text/javascript">
				   $("#<? echo $a1; ?>_111").click(function() {
					 $("#main_div").load("new.php",{ id : <? echo $ssss_one->id; ?> });
				   }); 
				  </script>
		  <?
					}
			?>
        </marquee></td>
  </tr>
  <?
			}
		?>
  <tr>
    <td height="400" align="center" valign="top">
	 <div id="main_div">&nbsp;</div>
	  <script type="text/javascript">
	 $("#main_div").load("main.php",{ ss : "9" });
	 </script>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="60%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="22%" align="center" valign="middle" >
		  <a href="#" id="kiuy4" class="style435"  style="color:#FFFFFF">فريقنا</a>
		  <script type="text/javascript">
			$("#kiuy4").click(function() {
			$("#main_div").load("main.php",{ ss : "12" });
			}); 
		</script>
		</td>
		 <td width="4%" align="center" valign="middle" ><div align="center" class="style435"><div align="center">|</div></div></td>
        <td width="22%" align="center" valign="middle" >
		  <a href="#" id="kiuy3" class="style435"  style="color:#FFFFFF">شركائنا</a>
		  <script type="text/javascript">
			$("#kiuy3").click(function() {
			$("#main_div").load("main.php",{ ss : "11" });
			}); 
		</script>
		</td>
			  <td width="3%" align="center" valign="middle" ><div align="center" class="style435"><div align="center">|</div></div></td>
        <td width="21%" align="center" valign="middle" >
		  <a href="#" id="kiuy2" class="style435"  style="color:#FFFFFF">من نحن </a>
		  <script type="text/javascript">
			$("#kiuy2").click(function() {
			$("#main_div").load("main.php",{ ss : "10" });
			}); 
		</script>
		</td>
			  <td width="3%" align="center" valign="middle" ><div align="center" class="style435"><div align="center">|</div></div></td>
        <td width="25%" align="center" valign="middle" >
		  <a href="#" id="kiuy1" class="style435" style="color:#FFFFFF">الصفحة الرئيسية </a>
		  <script type="text/javascript">
			$("#kiuy1").click(function() {
			$("#main_div").load("main.php",{ ss : "9" });
			}); 
		</script>
		</td>
      </tr>
    </table></td>
  </tr>
    <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>

    Copyright © 2019 <a href="index.php" class="lolo1" style="text-decoration:none;"><strong><i>Peareast Co.</i></strong></a>
    <!-- Credit: www.templatemo.com -->
        <div style="clear: both; margin-top: 10px;">                
            <a href="http://validator.w3.org/check?uri=referer"></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"></a>        </div> 
  </div> <!-- end of footer -->
</div> <!-- end of container -->
<!-- Free Website Templates @ TemplateMo.com -->
<!-- templatemo 104 hotel -->
<!-- 
Hotel Template 
http://www.templatemo.com/preview/templatemo_104_hotel 
-->
</body>
</html>
<?
mysql_close();
?>