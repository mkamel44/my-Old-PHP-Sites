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

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<title>لوحة التحكم</title>
<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="80%" align="center" valign="top">	
	<div style="width: 100%;overflow: auto;" id="main_div" >
	&nbsp;
	</div>
	</td>
    <td width="20%" align="center" valign="top">
	<table width="100%" border="1" bordercolor="#FF0000" id="example">
      <tr>
        <td><table width="100%" height="185" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td align="center" valign="middle">
			<a id="link1" href="#" class="style1">المحلات</a>
                <script type="text/javascript">
			 $("#link1").click(function() {
			 	$("#main_div").load("‫showShops.php");
			 }); 
			</script>
            </td>
          </tr>
          <tr>
             <td align="center" valign="middle">
			<a id="link2" href="#" class="style1">الوجبات</a>
                <script type="text/javascript">
			 $("#link2").click(function() {
			 	$("#main_div").load("showShopsSnacks.php");
			 }); 
			</script>
            </td>
          </tr>
		    <tr>
             <td align="center" valign="middle">
			<a id="link23" href="#" class="style1">الصفحات</a>
                <script type="text/javascript">
			 $("#link23").click(function() {
			 	$("#main_div").load("‫updatea.php");
			 }); 
			</script>
            </td>
          </tr>
		   <tr>
             <td align="center" valign="middle">
			<a id="link3" href="#" class="style1">تعديل كلمة السر</a>
                <script type="text/javascript">
			 $("#link3").click(function() {
			 	$("#main_div").load("updatepass.php");
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