<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/exam_schedule_days/Exam_ScheduleDbase.php");

$db = new Exam_ScheduleDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			يوم امتحان جديد
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($add != "" )
		{

			$std = new Exam_Schedule_Days();

			$std->the_date = $the_date;

			$std->the_day = $the_day;

			$db->addExam_Schedule_Days($std);


			?>

			<div dir="rtl" class="msg msg-ok">
				<p>
					<strong>
						تم الاضافة بنجاح
					</strong>
				</p>
			</div>
			<?

		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<select name="the_day" class="field size1" id="the_day" style="width:100px" dir="rtl">
									<option value="الأحد">
										الأحد
									</option>
									<option value="الاثنين">
										الاثنين
									</option>
									<option value="الثلاثاء">
										الثلاثاء
									</option>
									<option value="الأربعاء">
										الأربعاء
									</option>
									<option value="الخميس">
										الخميس
									</option>
								</select>
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اليوم
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="the_date" id="the_date"  type="text"  class="field size1" />
								<script>
									$("#the_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								التاريخ
							</td>
						</tr>


					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">

					<input name="addshop2" id="addshop2" type="submit" class="button" value="اضافة" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#the_day").val() != "" && $("#the_date").val() != ""  )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addExam_Schedule_Days.php",{  the_day : $("#the_day").val(),the_date : $("#the_date").val(), add : "done"  });


								}
								else
								{
									alert(" تأكد من المدخلات ");
								}

							});
					</script>
				</td>
			</tr>

		</table>
		<?
		mysql_close();

		?>
	</div>
</div>
<!-- End Pagging -->

