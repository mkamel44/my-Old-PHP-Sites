<?
session_start();

extract($_REQUEST);

if($log == "out")
{

	$_SESSION["login_cp_eco"] = false;


	?>
	<script language='JavaScript' type='text/JavaScript'>
		window.location='../../cp.php';
	</script>
	<?
	exit();
}


?>