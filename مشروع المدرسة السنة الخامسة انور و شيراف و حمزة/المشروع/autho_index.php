<?
session_start();

extract($_REQUEST);

if($_SESSION['login'] == true)
{
		if($_SESSION['login_type'] == "admin")
		{
		?>
		<script language='JavaScript' type='text/JavaScript'>
			window.location='desgin/manager/index.php';
			</script>
		<?
		}else
		if($_SESSION['login_type'] == "person")
		{
		?>
		<script language='JavaScript' type='text/JavaScript'>
			window.location='desgin/person/index.php';
			</script>
		<?
		}else
		if($_SESSION['login_type'] == "teachars")
		{
		?>
		<script language='JavaScript' type='text/JavaScript'>
			window.location='desgin/teachars/index.php';
			</script>
		<?
		}else
		if($_SESSION['login_type'] == "students")
		{
		?>
		<script language='JavaScript' type='text/JavaScript'>
			window.location='desgin/students/index.php';
			</script>
		<?
		}

}



?>