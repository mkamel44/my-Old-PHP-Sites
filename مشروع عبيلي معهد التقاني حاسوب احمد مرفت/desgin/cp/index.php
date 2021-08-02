<?
session_start();

extract($_REQUEST);

if($log == "out")
{

	    $_SESSION["login_cp"] = false;
		
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../cp.php';
	</script>
<?
	exit();
}

if($_SESSION["login_cp"] != true)
{
?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../cp.php';
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

<title>المشرف</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="19%" align="center" valign="middle"  class="btn-lg "><a href="index.php?log=out"  style="color:#FF0000">تسجيل الخروج</a></td>
	<td width="66%" align="right" valign="middle"  class="btn-lg "  style="color:#FF0000" ><?  echo $_SESSION["login_time"]; ?></td>
    <td width="15%" align="center" valign="middle"  class="btn-lg "  style="color:#FF0000" >وقت الدخول</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
	  <tr>
		<td colspan="6" align="center" valign="middle" class="btn-info btn-lg">ارقام الموبيلات المراد تحويلهم </td>
	  <tr>
		<td width="112" align="center" valign="middle" class="btn-info btn-lg" style="width:80px">النتيجة</td>
		<td width="390" align="center" valign="middle" class="btn-info btn-lg" style="width:160px">تاريخ الطلب </td>
		<td width="107" align="center" valign="middle" class="btn-info btn-lg" style="width:100px">باقي الرصيد الكلي</td>
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
									$("#main_div").load("showPhonsNumbers.php");
								}
						,5000
						);		
				
			</script>
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
	  <tr>
		<td colspan="2" align="center" valign="middle" class="btn-info btn-lg">الاستفسارات القادمة من اصحاب البطاقات </td>
	  <tr>
		<td align="center" valign="middle" class="btn-info btn-lg" style="width:80px">الرسائل</td>
		<td align="center" valign="middle" class="btn-info btn-lg" style="width:200px">رقم البطاقة</td>
	  </tr>
	  </table>
	  <div id="all_cards_messages" style="height: 200px;overflow: auto;">
			<script type="text/javascript">
			$("#all_cards_messages").load("showCardsMessages.php");
			</script>
	 </div>
	</td>
  </tr>
</table>
<script type="text/javascript">

			 setInterval(
								function ()
								{
									$("#all_cards_messages").load("showCardsMessages.php");
								}
						,5000
						);		
				
			</script>
 
<script src="js/vegas.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>

</body>
</html>