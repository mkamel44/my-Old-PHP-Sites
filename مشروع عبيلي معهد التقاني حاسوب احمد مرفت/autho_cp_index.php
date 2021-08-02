<?
session_start();

extract($_REQUEST);

if($_SESSION['login_cp'] == true)
{	
	?>
	<script language='JavaScript' type='text/JavaScript'>
	window.location='desgin/cp/index.php';
	</script>
	<?
}
?>