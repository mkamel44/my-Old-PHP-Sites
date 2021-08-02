<?
session_start();

extract($_REQUEST);

if($_SESSION['login_cp_eco'] == true){
	?>
	<script language='JavaScript' type='text/JavaScript'>
		window.location='desgin/cp/index.php';
	</script>
	<?
}

include("database/Connection.php");

include("database/admin/AdminDbase.php");

$db = new AdminDbase();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Login Cpanel
		</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="login_data/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login_data/css/util.css">
		<link rel="stylesheet" type="text/css" href="login_data/css/main.css">
		<!--===============================================================================================-->
	</head>
	<body>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('login_data/images/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="post">
						<span class="login100-form-logo">
							<img src="img/logo.png" alt="" width="150" height="150" class="img-fluid">
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Log in
						</span>
						<?


							if($sub == "login"){

								$real_name = $name;

								//$pass = md5(preg_replace(' / [ ^ a - zA - Z0 - 9] / ','',$pass));

								//$name = md5(preg_replace(' / [ ^ a - zA - Z0 - 9] / ','',$name));


								$adm       = new Admin();

								$adm->name = $name;

								$adm->pass = $pass;

								$adm->id = 1;

								$ss = $db->checkAdmin($adm);

								if($ss == true){

									$_SESSION["login_cp_eco"] = true;

									$_SESSION["login_time_eco"] = date("Y-m-d H:i:s");

									?>
									<script language='JavaScript' type='text/javascript'>
										window.location='desgin/cp/index.php';
									</script>
									<?
								}
								else
								{
									?>
									<br />
									<span style="color: red;font-size: 18px">
										Erorr Login
									</span>
									<?
								}

								mysql_close();

							}
							?>
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="name" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;">
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;">
							</span>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" id="sub" name="sub" value="login">
								Login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div id="dropDownSelect1">
		</div>

		<!--===============================================================================================-->
		<script src="login_data/vendor/jquery/jquery-3.2.1.min.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/vendor/animsition/js/animsition.min.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/vendor/bootstrap/js/popper.js">
		</script>
		<script src="login_data/vendor/bootstrap/js/bootstrap.min.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/vendor/select2/select2.min.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/vendor/daterangepicker/moment.min.js">
		</script>
		<script src="login_data/vendor/daterangepicker/daterangepicker.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/vendor/countdowntime/countdowntime.js">
		</script>
		<!--===============================================================================================-->
		<script src="login_data/js/main.js">
		</script>

	</body>
</html>