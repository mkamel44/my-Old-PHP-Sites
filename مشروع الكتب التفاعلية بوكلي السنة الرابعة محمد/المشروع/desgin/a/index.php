<?
session_start();

extract($_REQUEST);

if($log == "out")
{

	    $_SESSION["login_a"] = false;
		
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../a.php';
	</script>
<?
	exit();
}

if($_SESSION["login_a"] != true)
{
?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../a.php';
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
    <td width="82%" align="center" valign="top">	
	<div style="width: 100%;overflow: auto;" id="main_div" >
	&nbsp;
	</div>
			<script type="text/javascript">
function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
</script>

	</td>
    <td width="18%" align="center" valign="top">
	<table width="100%" border="1" bordercolor="#FF0000" id="example">
      <tr>
        <td><table width="100%" height="35" border="0" cellpadding="2" cellspacing="2">
		  <tr>
            <td height="31" align="center" valign="middle">
			<a id="link1" href="#" class="style1">الكتب</a>
                <script type="text/javascript">
			 $("#link1").click(function() {
			 	$("#main_div").load("showBooks.php");
			 }); 
			</script>
			</td>
          </tr>
          <tr>
            <td height="31" align="center" valign="middle"><a href="index.php?log=out" class="style1">تسجيل خروج </a></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>