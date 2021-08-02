<?
session_start();

extract($_REQUEST);

if($log == "out")
{

		include("../../database/Connection.php");

		include("../../database/cards/CardsDbase.php");

		$db = new CardsDbase();
		
		$db->updateCardsLuk($_SESSION["login_id"],"true");
		
		mysql_close();


	    $_SESSION["login"] = false;
		
		$_SESSION["login_id"] = -1;
		
		$_SESSION["login_name"] ="no name";
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../index.php';
	</script>
<?
	exit();
}

if($_SESSION["login"] != true)
{
?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../index.php';
	</script>
<?
	exit();
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/vegas.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<script src="js/jquery.js"></script>

<script language="JavaScript" type="text/javascript">

function do_units_price()
{
	var cost = $("#phone_units").val();
		
	var price = 0; 
		
	$("#request_units").attr("disabled", "disabled");
		
	if(cost == 40)
	{
		price = 50;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 65)
	{
		price = 75;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 90)
	{
		price = 100;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 100)
	{
		price = 115;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 150)
	{
		price = 175;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 200)
	{
		price = 225;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 225)
	{
		price = 250;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 300)
	{
		price = 325;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 450)
	{
		price = 500;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 500)
	{
		price = 550;
		$("#request_units").attr("disabled", false);
	}else
	if(cost == 900)
	{
		price = 1000;
		$("#request_units").attr("disabled", false);
	}	
	
	$("#phone_price").val(price);

}

</script>


<title>تحويل الرصيد</title>
</head>
<body>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="12%" align="center" valign="middle"  class="btn-lg "><a href="index.php?log=out"  style="color:#FF0000">تسجيل الخروج</a></td>
	<td width="19%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000" >  <?  echo $_SESSION["login_time"]; ?></td>
    <td width="10%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000" >وقت الدخول</td>
    <td width="21%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000" > <?  echo $_SESSION["login_name"]; ?></td>
    <td width="11%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000" >رمز البطاقة </td>
    <td width="12%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000">
	<div id="units" name="units">0</div>
	 <script type="text/javascript">
					 setInterval(
								function ()
								{
									 $.ajax({
									 url: "units.php", 
									 data: { 
										CardID : <?  echo $_SESSION["login_id"]; ?>
										   },
									 success: function(result)
									 {
				
									 	if(result == "no")
										{
									 		window.location='index.php?log=out';
									  	}
										else
										{
									 		$('#units').html(result);
										}
									 }
										  });
								}
								,5000
							    );
			</script>
	</td>
    <td width="15%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000">الرصيد المتبقي</td>
  </tr>
</table>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" align="center" valign="bottom"><table width="434" border="0" align="center" cellpadding="0" cellspacing="0"  >
      <tr>
        <td colspan="3" align="center"  class="btn-info btn-lg">للاستفسار عن اي امر الرجاء المحادثة مع المشرف </td>
      </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="bg-danger">
		 <textarea name="text2"  id="text2"  class="form-control " style="text-align:right;font-size:21px;height:90px;direction:rtl" readonly="readonly" placeholder="هنا تظهر الرسائل"></textarea>
		 
		  <script type="text/javascript">
					 setInterval(
								function ()
								{
									 $.ajax({
									 url: "getMsg.php", 
									 data: { 
										CardID : <?  echo $_SESSION["login_id"]; ?>
										   },
											 success: function(result)
											 {
						
												$("#text2").val(result);
												
											 }
										  });
								}
								,5000
							    );
			</script>
		</td>
        </tr>

      <tr>
	   <td width="12%" align="right" class="bg-danger">
	    <label>
				<input type="button"  name="restMSG" id="restMSG"  value="افراغ" style="width:50px" class="form-control" />
				</label>
		  <script type="text/javascript">
			  $("#restMSG").on('click', function (){
			
					 $.ajax({
									 url: "restMSG.php", 
									 data: { 
										CardID : <?  echo $_SESSION["login_id"]; ?> 
										   },
											 success: function(result)
											 {
												$("#text1").val("");
											 }
						});
			  
			  });
			</script>			    
		</td>
        <td width="12%" align="right" class="bg-danger">
		 <label>
		<input type="button"  name="send" id="send"  value="ارسال" style="width:50px" class="form-control" />
		</label>
		  <script type="text/javascript">
			  $("#send").on('click', function (){
			
					if($("#text1").val() != "")
					{
						 $.ajax({
									 url: "setMsg.php", 
									 data: { 
										CardID : <?  echo $_SESSION["login_id"]; ?> ,
										msg : $("#text1").val()
										   },
											 success: function(result)
											 {
												$("#text1").val("");
											 }
							});
					}
			  
			  });
			</script>			    
		</td>
        <td width="88%" align="right" class="btn-lg bg-danger">   <input name="text1" type="text"  placeholder="ارسل نص للاستفسار عن اي شيء تريده" class="form-control " id="text1" style="text-align:right;font-size:21px"  />        </td>
      </tr>

      <tr>
        <td colspan="3" align="center" ><br />
          <br />
            <label></label>
            <script type="text/javascript">
			  $("#request_units").on('click', function (){
			  
			  $("#request_units").attr("disabled", "disabled");
			  
		  				
					if($("#phone_number").val() > 0  && $("#phone_units").val() > 0)
					{
					
						 var new_units =  $("#units").text() - $("#phone_units").val();

					
						if(new_units > 0)
						{

						$("#messages_cards").load("goNumber.php",{  phones_number : $("#phone_number").val() , phones_units : $("#phone_units").val() , phones_date_of_req : "<? echo date( 'Y-m-d H:i:s'); ?>" , phones_card_id :  "<? echo $_SESSION["login_id"]; ?>"  , phones_price : $("#phone_price").val() });
						
							$("#phone_number").val("");
							$("#phone_units").val("");
							$("#phone_price").val("");
						
						}
						else
						{
							alert("لم يعد لديك رصيد كافي الرجاء شراء بطاقة جديدة");
						}
						
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}

			  
			  });
			</script>        </td>
      </tr>
    </table></td>
    <td width="50%" align="center" valign="bottom">
	
<table width="60%" border="0" align="center" cellpadding="0" cellspacing="0" id="messages_cards">
  <tr>
    <td align="center" valign="middle" class="btn-danger" style="font-size:18px"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="btn-success" style="font-size:18px"></td>
  </tr>
</table>

<br />
<table width="434" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <tr>
            <td colspan="3" align="center"  class="btn-info btn-lg">ادخل الرقم المراد التحويل له من الوحدات ام تي ان او سيريا تل </td>
          </tr>
          <tr>
            <td width="56%" align="right" class="bg-danger"><input name="phone_number" type="text" class="form-control " id="phone_number" style="text-align:center;font-size:21px"     placeholder="الرقم يجب ان يكون من 10 خانات"  onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" maxlength="10" /></td>

            <td align="right" class="btn-lg bg-danger">رقم المو                                    بايل او الكود </td>
          </tr>
          <tr>
            <td align="right" class="bg-danger"><input name="phone_units" type="text" class="form-control " id="phone_units" style="text-align:center;font-size:21px" placeholder="اكثر كمية هي 1000 وحدة"  onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}do_units_price();" maxlength="4" /></td>
            <td align="right" class="btn-lg bg-danger">كمية الوحدات المراد تعبئته </td>
          </tr>
          <tr>
            <td align="right" class="bg-danger"><input name="phone_price" type="text" class="form-control " id="phone_price" style="text-align:center;font-size:21px" readonly="readonly" /></td>
            <td align="right" class="btn-lg bg-danger">تكلفة كمية الرصيد </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td colspan="3" align="center" >
			<br />
              <label>
               <input type="button"  name="request_units" id="request_units" disabled="disabled" value="طلب الرصيد" style="width:200px" class="form-control" />
              </label>          
			  <script type="text/javascript">
			  $("#request_units").on('click', function (){
			  
			  $("#request_units").attr("disabled", "disabled");
			  
		  				
					if($("#phone_number").val() > 0  && $("#phone_units").val() > 0)
					{
					
						 var new_units =  $("#units").text() - $("#phone_units").val();

					
						if(new_units > 0)
						{

						$("#messages_cards").load("goNumber.php",{  phones_number : $("#phone_number").val() , phones_units : $("#phone_units").val() , phones_date_of_req : "<? echo date( 'Y-m-d H:i:s'); ?>" , phones_card_id :  "<? echo $_SESSION["login_id"]; ?>"  , phones_price : $("#phone_price").val() });
						
							$("#phone_number").val("");
							$("#phone_units").val("");
							$("#phone_price").val("");
						
						}
						else
						{
							alert("لم يعد لديك رصيد كافي الرجاء شراء بطاقة جديدة");
						}
						
									 
					}
					else
					{
					 	alert(" تأكد من المدخلات ");
					}

			  
			  });
			</script>			    </td>
          </tr>
</table>
	</td>
  </tr>
</table>

	  <br />
<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
		<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0"  >
	  <tr>
		<td colspan="6" align="center" valign="middle" class="btn-info btn-lg">		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="14%" align="left" valign="middle">
			>&nbsp;
			</td>
            <td width="73%" align="center" valign="middle" class="btn-info btn-lg">جدول ارقام الموبيلات التي تم طلبها </td>
            <td width="13%" align="right" valign="middle">&nbsp;
						
			</td>
          </tr>
        </table>
		  </td>
	  <tr>
		<td width="112" align="center" valign="middle" class="btn-info btn-lg" style="width:80px">النتيجة</td>
		<td width="324" align="center" valign="middle" class="btn-info btn-lg" style="width:160px">تاريخ التحويل </td>
		<td width="390" align="center" valign="middle" class="btn-info btn-lg" style="width:160px">تاريخ التحويل </td>
		<td width="107" align="center" valign="middle" class="btn-info btn-lg" style="width:100px">الثمن</td>
		<td width="93" align="center" valign="middle" class="btn-info btn-lg" style="width:100px">الكمية  </td>
		<td width="205" align="center" valign="middle" class="btn-info btn-lg" style="width:200px">رقم الموبايل </td>
	  </tr>
	  </table>
	  <div id="all_phones_numbers" style="height: 200px;overflow: auto;">
			<script type="text/javascript">
			$("#all_phones_numbers").load("showPhonsNumbers.php");
			</script>
	 </div>
	</td>
  </tr>
</table>
<script type="text/javascript">

			 setInterval(
								function ()
								{
									$("#all_phones_numbers").load("showPhonsNumbers.php");
								}
						,25000
						);		
				
			</script>



<script src="js/vegas.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>

</body>
</html>