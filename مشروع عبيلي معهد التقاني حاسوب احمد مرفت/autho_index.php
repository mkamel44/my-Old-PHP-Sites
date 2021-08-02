<?
session_start();

extract($_REQUEST);

if($_SESSION['login'] == true)
{	
	?>
	<script language='JavaScript' type='text/JavaScript'>
	window.location='desgin/cards/index.php';
	</script>
	<?
}
?>