<?
session_start();

extract($_REQUEST);


							if($_SESSION['login_depa'] == "1")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/admin/index.php';
							  </script>
							  <?	
							}

	
							if($_SESSION['login_depa'] == "2")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/cards/index.php';
							  </script>
							  <?	
							}

	
							if($_SESSION['login_depa'] == "3")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/kidsgame/index.php';
							  </script>
							  <?	
							}


							if($_SESSION['login_depa'] == "4")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/swimming/index.php';
							  </script>
							  <?	
							}
	
							if($_SESSION['login_depa'] == "5")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/playground/index.php';
							  </script>
							  <?	
							}
	
							if($_SESSION['login_depa'] == "6")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/hotel/index.php';
							  </script>
							  <?	
							}
	
							if($_SESSION['login_depa'] == "7")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/restaurant/index.php';
							  </script>
							  <?	
							}
	
							if($_SESSION['login_depa'] == "8")
							{
								?>
							  <script language='JavaScript' type='text/javascript'>
								window.location='desgin/mall/index.php';
							  </script>
							  <?	
							}

?>