<?
include("database/Connection.php");

include("database/depas/DepasDbase.php");

$db_depas = new DepasDbase();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			كلية الاقتصاد - السنة التمهيدية
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
		<script src="lib/bootstrap/js/bootstrap.min.js">
		</script>
		<script src="lib/easing/easing.min.js">
		</script>
		<script src="lib/counterup/jquery.waypoints.min.js">
		</script>
		<script src="lib/typed/typed.min.js">
		</script>

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

								$("#main_div").load("getText.php",{ text_id  : "3" });

							</script>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-sidebar">
							<h5 class="sidebar-title">
								<a href="pg1.php">
									السنة التمهيدية
								</a>
							</h5>
							<div class="sidebar-content">
								<ul class="list-sidebar">
									<li>
										<a id="link1" href="#">
											أسماء الطلاب المقبولين
										</a>
										<script type="text/javascript">
											$("#link1").click(function()
												{
													$("#main_div").load("showAcceptedInfo_Students.php");
												});
										</script>
									</li>
									<li>
										<a id="link11" href="#">
											علامات الطلاب المقبوليين
										</a>
										<script type="text/javascript">
											$("#link11").click(function()
												{
													$("#main_div").load("showAccepted_Students.php");
												});
										</script>
									</li>
									<li>
										<a id="link2" href="#">
											المواد لكل قسم
										</a>
										<script type="text/javascript">
											$("#link2").click(function()
												{
													$("#main_div").load("show_Depas_Subjects.php");
												});
										</script>
									</li>
									<li>
										<a id="link3" href="#">
											جدول الدوام
										</a>
										<script type="text/javascript">
											$("#link3").click(function()
												{
													$("#main_div").load("showTime_Schedule.php");
												});
										</script>
									</li>
									<li>
										<?
										$all_depas= $db_depas->getAllDepas();
										?>
										<a id="link4" href="#">
											جدول الامتحانات
										</a>
										<script type="text/javascript">
											$("#link4").click(function()
												{
													$("#main_div").load("getExam_Schedule<? echo count($all_depas); ?>.php");
												});
										</script>
									</li>
									<li>
										<a id="link5" href="#">
											الأوراق المطلوبة
										</a>
										<script type="text/javascript">
											$("#link5").click(function()
												{
													$("#main_div").load("getText.php",{ text_id  : "1" });
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
<?
mysql_close();
?>
