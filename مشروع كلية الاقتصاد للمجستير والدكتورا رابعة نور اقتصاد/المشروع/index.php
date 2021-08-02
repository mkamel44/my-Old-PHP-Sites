<?
extract($_REQUEST);

include("database/Connection.php");

include("database/depas/DepasDbase.php");

$db_depas           = new DepasDbase();

include("database/differentiation_dates/Differentiation_datesDbase.php");

$db_differentiation = new Differentiation_datesDbase();

include("database/messages/MessagesDbase.php");

$db_messages        = new MessagesDbase();

include("database/theses/ThesesDbase.php");

$db_theses          = new ThesesDbase();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			كلية الاقتصاد - الرئيسية
		</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">

		<!-- Favicons -->
		<!-- show icons https://ionicons.com/v2/cheatsheet.html -->
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

	<body id="page-top">

		<!--/ Nav Star /-->
		<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
			<div class="container" dir="rtl">

				<? include("nav_bar.php"); ?>

			</div>
		</nav>
		<!--/ Nav End /-->

		<!--/ Intro Skew Star /-->
		<div id="home" class="intro route bg-image" style="background-image: url('img/intro-bg.jpg')">
			<div class="overlay-itro">
			</div>
			<div class="intro-content display-table">
				<div class="table-cell">
					<div class="container">

						<h2 class="intro-title mb-4" style="font-size: 50px;padding-top: 100px">

						</h2>

					</div>
				</div>
			</div>
		</div>
		<!--/ Intro Skew End /-->

		<!--/ Section About Star /-->
		<section id="about1" class="about-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								كلية الاقتصاد
							</h3>

							<p class="subtitle-a">
								نبذة عن الكلية
							</p>
							<div class="line-mf">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="service-box">
							<p class="subtitle-a text-center" style="font-size: 20px">

								صدر المرسوم التشريعي عام 1963 متضمناً تحويل المعهد العالي التجاري إلى كلية التجارة بجامعة حلب . وفي عام 1967 صدر مرسوم بتحويلها إلى كلية العلوم الاقتصادية .
								وانطلاقاً من سياسة التنسيق بين الكليات المتماثلة في جامعات القطر اصدر مجلس التعليم العالي بتاريخ 1977 قرار باعتماد الخطة الدراسية الموحدة للكليتين في جامعتي حلب ودمشق وأصبحت تدعى كلية الاقتصاد والتجارة . وفي عام 1986 صدر المرسوم التشريعي القاضي بتعديل تسمية كلية الاقتصاد والتجارة وأصبحت تدعى كلية الاقتصاد .

							</p>


						</div>

					</div>

				</div>
			</div>
		</section>
		<!--/ Section About End /-->

		<!--/ Section About Star /-->
		<section id="about" class="about-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								آخر الأخبار
							</h3>

							<p class="subtitle-a">
								آخر الأخبار الكلية من المستجدات
							</p>
							<div class="line-mf">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<? include("last_message.php"); ?>
					<? include("time.php"); ?>
					<? include("last_these.php"); ?>
				</div>
			</div>
		</section>
		<!--/ Section About End /-->

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