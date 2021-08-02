<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
		</script>
		<script src="datetime/jquery.plugin.js">
		</script>
		<script src="datetime/jquery.datetimeentry.js">
		</script>
		<script src="nicEdit/nicEdit.js" type="text/javascript">
		</script>
		<title>
			لوحة التحكم
		</title>

		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link href="datetime/jquery.datetimeentry.css" rel="stylesheet" type="text/css" />

	</head>

	<body>
		<table width="100%" border="0" cellpadding="2" cellspacing="0">
			<tr>
				<td height="89">
					<div id="header">
						<div id="div">
							<div class="shell">
								<!-- Logo + Top Nav -->
								<div id="top">
									<!-- <h1><a href="#">لوحة التحكم</a></h1> -->
									<!--    <div id="top-navigation"> Welcome <a href="#"><strong>Administrator</strong></a> <span>|</span> <a href="#">Profile Settings</a> <span>|</span> <a href="#">Log out</a> </div>  -->
								</div>
								<!-- End Logo + Top Nav -->
								<!-- Main Nav -->
								<div id="navigation">
									<ul>
										<li>
											<a href="index.php" class="active">
												<span>
													لوحة التحكم
												</span>
											</a>
										</li>
										<!--  <li><a href="#" class="not_active"><span>لوحة التحكم</span></a></li> -->
									</ul>
								</div>
								<!-- End Main Nav -->
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="5" cellspacing="5">
						<tr>
							<td width="81%" align="center" valign="top">
								<div id="main_div">

								</div>
							</td>
							<td width="19%" align="center" valign="top">
								<div class="box">
									<!-- Box Head -->
									<div class="box-head">
										<h2>
											القائمة الرئيسية
										</h2>
									</div>
									<!-- End Box Head-->
									<div class="box-content">

										<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table">
											<tr>
												<td align="center" valign="middle">
													<a id="link1" href="#" class="my_link">
														الأقسام
													</a>
													<script type="text/javascript">
														$("#link1").click(function()
															{
																$("#main_div").load("showDepas.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link2" href="#" class="my_link">
														المواد
													</a>
													<script type="text/javascript">
														$("#link2").click(function()
															{
																$("#main_div").load("showSubjects.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link3" href="#" class="my_link">
														تعديل الاسم وكلمة السر
													</a>
													<script type="text/javascript">
														$("#link3").click(function()
															{
																$("#main_div").load("updatePass.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a href="autho_cp_index.php?log=out" class="my_link">
														تسجيل خروج
													</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="box">
									<!-- Box Head -->
									<div class="box-head">
										<h2>
											السنة التمهيدية
										</h2>
									</div>
									<!-- End Box Head-->
									<div class="box-content">

										<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table">
											<tr>
												<td align="center" valign="middle">
													<a id="link99" href="#" class="my_link">
														مقدمة عن السنة التمهيدية
													</a>
													<script type="text/javascript">
														$("#link99").click(function()
															{
																$("#main_div").load("updateText.php",{ MembersID  : "3" });
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link4" href="#" class="my_link">
														مواعيد تسجيل المفاضلة
													</a>
													<script type="text/javascript">
														$("#link4").click(function()
															{
																$("#main_div").load("updateDifferentiation_dates.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link55" href="#" class="my_link">
														الطلاب المقبوليين
													</a>
													<script type="text/javascript">
														$("#link55").click(function()
															{
																$("#main_div").load("show_Students.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link5" href="#" class="my_link">
														علامات الطلاب
													</a>
													<script type="text/javascript">
														$("#link5").click(function()
															{
																$("#main_div").load("showAccepted_Students.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link6" href="#" class="my_link">
														جدول الدوام
													</a>
													<script type="text/javascript">
														$("#link6").click(function()
															{
																$("#main_div").load("showTime_Schedule.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link7" href="#" class="my_link">
														جدول أيام الامتحانات
													</a>
													<script type="text/javascript">
														$("#link7").click(function()
															{
																$("#main_div").load("showExam_Schedule_Days.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link77" href="#" class="my_link">
														جدول ساعات الامتحانات
													</a>
													<script type="text/javascript">
														$("#link77").click(function()
															{
																$("#main_div").load("showExam_Schedule_Times.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link8" href="#" class="my_link">
														جدول الامتحانات
													</a>
													<script type="text/javascript">
														$("#link8").click(function()
															{
																$("#main_div").load("showExam_Schedule.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link9" href="#" class="my_link">
														الأوراق المطلوبة
													</a>
													<script type="text/javascript">
														$("#link9").click(function()
															{
																$("#main_div").load("updateText.php",{ MembersID  : "1" });
															});
													</script>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="box">
									<!-- Box Head -->
									<div class="box-head">
										<h2>
											الماجستير
										</h2>
									</div>
									<!-- End Box Head-->
									<div class="box-content">

										<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table">
											<tr>
												<td align="center" valign="middle">
													<a id="link121" href="#" class="my_link">
														مقدمة عن السنة الماجستير
													</a>
													<script type="text/javascript">
														$("#link121").click(function()
															{
																$("#main_div").load("updateText.php",{ MembersID  : "4" });
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link11" href="#" class="my_link">
														رسائل الماجستير
													</a>
													<script type="text/javascript">
														$("#link11").click(function()
															{
																$("#main_div").load("showMessages.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link12" href="#" class="my_link">
														رسائل تم مناقشتها
													</a>
													<script type="text/javascript">
														$("#link12").click(function()
															{
																$("#main_div").load("showMessages_Debate.php");
															});
													</script>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="box">
									<!-- Box Head -->
									<div class="box-head">
										<h2>
											الدكتوراه
										</h2>
									</div>
									<!-- End Box Head-->
									<div class="box-content">

										<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table">
											<tr>
												<td align="center" valign="middle">
													<a id="link112" href="#" class="my_link">
														مقدمة عن سنة الدكتورا
													</a>
													<script type="text/javascript">
														$("#link112").click(function()
															{
																$("#main_div").load("updateText.php",{ MembersID  : "5" });
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link13" href="#" class="my_link">
														اطروحات الدكتوراه
													</a>
													<script type="text/javascript">
														$("#link13").click(function()
															{
																$("#main_div").load("showTheses.php");
															});
													</script>
												</td>
											</tr>
											<tr>
												<td align="center" valign="middle">
													<a id="link14" href="#" class="my_link">
														اطروحات تم مناقشتها
													</a>
													<script type="text/javascript">
														$("#link14").click(function()
															{
																$("#main_div").load("showTheses_Debate.php");
															});
													</script>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
