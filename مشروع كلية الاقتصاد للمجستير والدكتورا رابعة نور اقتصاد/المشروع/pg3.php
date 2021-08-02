<?
extract($_REQUEST);

include("database/Connection.php");

include("database/depas/DepasDbase.php");

$db_depas = new DepasDbase();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			كلية الاقتصاد - الدكتوراه
		</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">

		<!-- Favicons -->
		<link href="favicon.ico" rel="icon">

		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Libraries CSS Files -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate/animate.min.css" rel="stylesheet">
		<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- JavaScript Libraries -->
		<script src="lib/jquery/jquery.min.js">
		</script>
		<script src="lib/popper/popper.min.js">
		</script>
		<script src="lib/bootstrap/js/bootstrap.min.js">
		</script>
		<script src="lib/easing/easing.min.js">
		</script>
		<script src="lib/counterup/jquery.waypoints.min.js">
		</script>
		<script src="lib/typed/typed.min.js">
		</script>
		<script src="datetime/jquery.plugin.js">
		</script>
		<script src="datetime/jquery.datetimeentry.js">
		</script>

		<link href="datetime/jquery.datetimeentry.css" rel="stylesheet" type="text/css" />

		<!-- Template Main Javascript File -->
		<script src="js/main.js">
		</script>

	</head>

	<body>
		<!--/ Nav Star /-->
		<nav class="navbar navbar-b navbar-reduce koko navbar-expand-md fixed-top" id="mainNav">
			<div class="container" dir="rtl">

				<? include("nav_bar.php"); ?>

			</div>
		</nav>
		<!--/ Nav End /-->

		<!--/ Section Blog-Single Star /-->
		<section class="blog-wrapper sect-pt4" id="blog" style="padding-top: 100px">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="form-comments text-right" style="height:458px;overflow: auto;" id="main_div" dir="rtl">
							<script type="text/javascript">

								$("#main_div").load("getText.php",{ text_id  : "5" });

							</script>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-sidebar">
							<h5 class="sidebar-title">
								<a href="pg3.php">
									الدكتوراه
								</a>
							</h5>
							<div class="sidebar-content">
								<ul class="list-sidebar">
									<li>
										<a id="link1" href="#">
											اطروحات غير مناقشة
										</a>
										<script type="text/javascript">
											$("#link1").click(function()
												{
													$("#main_div").load("getTheses.php");
													$("#main_div").css("background","#f5f5f5");
												});
										</script>
									</li>
									<li>
										<a id="link2" href="#">
											اطروحات مناقشة
										</a>
										<script type="text/javascript">
											$("#link2").click(function()
												{
													$("#main_div").load("getTheses_ok.php");
													$("#main_div").css("background","#f5f5f5");
												});
										</script>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ Section Blog-Single End /-->

		<? include("footer.php"); ?>

		<a href="#" class="back-to-top">
			<i class="fa fa-chevron-up">
			</i>
		</a>

		<div id="preloader">
		</div>

	</body>
</html>