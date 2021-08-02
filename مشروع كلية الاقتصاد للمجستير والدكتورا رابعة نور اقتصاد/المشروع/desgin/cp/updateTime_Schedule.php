<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/time_schedule/Time_ScheduleDbase.php");

$db  = new Time_ScheduleDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل دوام
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" )
		{

			$std = new Time_Schedule();

			$std->id = $MembersID;

			$std->depa_id = $depa_id;
			
			$std->subject_id = $subject_id;

			$std->teacher_name = $teacher_name;

			$std->the_day = $the_day;

			$std->the_time = $the_time;

			$db->updateTime_Schedule($std);

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
			$std = $db->getTime_ScheduleByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
									<option value="0" selected>
										----- الرجاء اختيار -----
									</option>
									<?
									$aa = $dba->getAllDepas();

									$sub= $dba->getSubjectByID($std->subject_id);

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
										<option <? echo ($sub->depa_id == $aaa->id ? "selected" : ""); ?> value="<? echo $aaa->id; ?>">
											<? echo $aaa->name; ?>
										</option>
										<?
									}
									?>
								</select>
								<script type="text/javascript">
									$(document).ready(function (e)
										{
											$("#depa_id").change(function()
												{

													var selectedValue = $(this).val();

													$.ajax(
														{
															url: "getSubjects.php",
															type: "POST",
															data:
															{
																depa_id : selectedValue
															},
															success: function(data)
															{
																$("#targetLayer4").html(data);
															},
															error: function()
															{
															}
														});
												});
										});
								</script>

							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم القسم
							</td>
						</tr>
						<tr>
							<td align="right" id="targetLayer4" >
								<select name="subject_id" class="field size1" id="subject_id" style="width:200px" dir="rtl">
									<?
									$aa = $dba->getAllSubjectsByDebaID($sub->depa_id);

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
										<option <? echo ($sub->id == $aaa->id ? "selected" : ""); ?> value="<? echo $aaa->id; ?>">
											<? echo $aaa->name; ?>
										</option>
										<?
									}
									?>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم المادة
							</td>
						</tr>
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
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اليوم
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="the_time" id="the_time" dir="rtl"  type="text"  class="field size1" value="<? echo $std->the_time; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								التوقيت
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="teacher_name" id="teacher_name" dir="rtl"  type="text"  class="field size1" value="<? echo $std->teacher_name; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								مدرس المادة
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

								if( $('#subject_id').length > 0 && $("#teacher_name").val() != "" && $("#the_day").val() != "" && $("#the_time").val() != "" )
								{

									$("#main_div").load("updateTime_Schedule.php",{  depa_id : $("#depa_id").val(),subject_id : $("#subject_id").val(),teacher_name : $("#teacher_name").val(),the_day : $("#the_day").val(),the_time : $("#the_time").val(), MembersID : <? echo $MembersID; ?> , update : "done"  });


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

