<?
session_start();

extract($_REQUEST);

if($log == "out")
{

	    $_SESSION["login_cards"] = false;
		
		 $_SESSION["login_depa"] = 0;
		
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../cp.php';
	</script>
<?
	exit();
}

if($_SESSION["login_cards"] != true || $_SESSION["login_depa"] != 7)
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

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<title>لوحة التحكم</title>
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td colspan="2" align="center" valign="top" class="style1" style="font-size:50px">المطاعم</td>
  </tr>

  <tr>
    <td width="84%" align="center" valign="top">	
	<div style="width: 100%;overflow: auto;" id="main_div" >
	&nbsp;
	</div>
	</td>
    <td width="16%" align="center" valign="top">
	<table width="100%" border="1" bordercolor="#FF0000" id="example">
      <tr>
        <td><table width="100%" height="185" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td align="center" valign="middle">
			<a href="#" id="link1" class="style1">تعديل المعلومات</a>
                <script type="text/javascript">
				   $("#link1").click(function() {
					 $("#main_div").load("‫updatea.php");
				   }); 
				  </script>
			</td>
          </tr>
		    <tr>
            <td align="center" valign="middle">
			<a href="#" id="link2" class="style1">الحجوزات الجديدة</a>
                <script type="text/javascript">
				   $("#link2").click(function() {
					 $("#main_div").load("Bookings.php");
				   }); 
				  </script>
			</td>
          </tr>
		   <tr>
            <td align="center" valign="middle">
			<a href="#" id="link3" class="style1">الحجوزات الموافق عليها لتأكيد الحضور</a>
                <script type="text/javascript">
				   $("#link3").click(function() {
					 $("#main_div").load("BookingsYes.php");
				   }); 
				  </script>
			</td>
          </tr>
		   <tr>
            <td align="center" valign="middle">
			<a href="#" id="link4" class="style1">الصور</a>
                <script type="text/javascript">
				   $("#link4").click(function() {
					 $("#main_div").load("showImgs.php",{ a : "3" });
				   }); 
				  </script>
			</td>
          </tr>
		    <tr>
            <td align="center" valign="middle"><a href="index.php?log=out" class="style1">تسجيل خروج </a></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>