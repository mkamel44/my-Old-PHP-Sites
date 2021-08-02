<?
session_start();

extract($_REQUEST);

if($log == "out")
{
	$_SESSION['login'] = false;
	
	$_SESSION['login_id'] = "";
		
	$_SESSION['login_type'] = "";
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../index.php';
	</script>
<?

}


if($_SESSION['login'] != true)
{
?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../index.php';
	</script>
<?
}

$xzcfcverc =  $_SERVER['REQUEST_URI'];
	
if(strpos($xzcfcverc, 'person') !== false &&  $_SESSION['login_type'] != 'person')
{
			
		exit();	
}else
if(strpos($xzcfcverc, 'manager') !== false &&  $_SESSION['login_type'] != 'admin')
{
	
		exit();			
}else
if(strpos($xzcfcverc, 'teachars') !== false &&  $_SESSION['login_type'] != 'teachars')
{
	
		exit();			
}else
if(strpos($xzcfcverc, 'students') !== false &&  $_SESSION['login_type'] != 'students')
{
	
		exit();			
}


?>