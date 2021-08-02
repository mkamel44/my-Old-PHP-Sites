<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/exam_schedule_days/Exam_ScheduleDbase.php");

$db  = new Exam_ScheduleDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل امتحان
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" )
		{

			$std = new Exam_Schedule();

			$std->id = $MembersID;

			$std->subject_id = $subject_id;
			
			$std->depa_id = $depa_id;

			$std->exam_schedule_days_id = $exam_schedule_days_id;
			
			$std->exam_schedule_times_id = $exam_schedule_times_id;

			$db->updateExam_Schedule($std);

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
		
		if($MembersID != ""){
			$std = $db->getExam_ScheduleByID($MembersID);
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
												
												$.ajax(
														{
															url: "getTimes.php",
															type: "POST",
															data:
															{
																depa_id : selectedValue
															},
															success: function(data)
															{
																$("#targetLayer2").html(data);
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
						  <td align="right" id="targetLayer2" >
							  <?
							  $aa = $db->getExam_Schedule_TimesByID($std->exam_schedule_times_id);
							  
							  echo $aa->the_time;
							  ?>
							  <input type="hidden" name="exam_schedule_times_id" id="exam_schedule_times_id" value="<? echo $std->exam_schedule_times_id; ?>" >
							</td>
						  <td align="right" valign="top" > : </td>
						  <td align="right" valign="top" >الساعة</td>
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
								<select name="exam_schedule_days_id" class="field size1" id="exam_schedule_days_id" style="width:300px" dir="rtl">
									<?
									$aa = $db->getAllExam_Schedule_Days();

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
										<option <? echo ($std->exam_schedule_days_id == $aaa->id ? "selected" : ""); ?> value="<? echo $aaa->id; ?>">
											(<? echo $aaa->the_day; ?>)(<? echo $aaa->the_date; ?>)
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
								اليوم
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

								if( $('#subject_id').length > 0 && $("#exam_schedule_days_id").val() != "" && $("#exam_schedule_times_id").val() != "" )
								{
									$("#main_div").load("updateExam_Schedule.php",{ depa_id : $("#depa_id").val(),subject_id : $("#subject_id").val(),exam_schedule_days_id : $("#exam_schedule_days_id").val(),exam_schedule_times_id : $("#exam_schedule_times_id").val(), MembersID : <? echo $MembersID; ?> , update : "done"  });


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

