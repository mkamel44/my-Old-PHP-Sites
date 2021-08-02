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
			تعديل يوم امتحان
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" )
		{

			$std = new Exam_Schedule_Days();

			$std->id = $MembersID;

			$std->the_date = $the_date;

			$std->the_day = $the_day;

			$db->updateExam_Schedule_Days($std);


			?>

			<div dir="rtl" class="msg msg-ok">
				<p>
					<strong>
						تم التعديل بنجاح
					</strong>
				</p>
			</div>
			<?

		}
		
		if($MembersID != "")
		{
			$std = $db->getExam_Schedule_DaysByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<select name="the_day" class="field size1" id="the_day" style="width:100px" dir="rtl">
									<option <? echo ($std->the_day == "الأحد" ? "selected" : ""); ?> value="الأحد">
										الأحد
									</option>
									<option <? echo ($std->the_day == "الاثنين" ? "selected" : ""); ?> value="الاثنين">
										الاثنين
									</option>
									<option <? echo ($std->the_day == "الثلاثاء" ? "selected" : ""); ?> value="الثلاثاء">
										الثلاثاء
									</option>
									<option <? echo ($std->the_day == "الأربعاء" ? "selected" : ""); ?> value="الأربعاء">
										الأربعاء
									</option>
									<option <? echo ($std->the_day == "الخميس" ? "selected" : ""); ?> value="الخميس">
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
								<input name="the_date" id="the_date"  type="text"  class="field size1" value="<? echo ($std->the_date == "0000-00-00" ? "" : $std->the_date ); ?>" />
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

					<input name="addshop2" id="addshop2" type="submit" class="button" value="تعديل" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#the_day").val() != "" && $("#the_date").val() != "" )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("updateExam_Schedule_Days.php",{  the_day : $("#the_day").val(),the_date : $("#the_date").val(), MembersID : <? echo $MembersID; ?>, update : "done"  });


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

