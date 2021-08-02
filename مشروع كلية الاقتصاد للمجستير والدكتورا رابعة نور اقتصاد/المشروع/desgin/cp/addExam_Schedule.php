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
			امتحان جديد
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($add != "" )
		{

			$std = new Exam_Schedule();

			$std->depa_id = $depa_id;
			
			$std->subject_id = $subject_id;

			$std->exam_schedule_days_id = $exam_schedule_days_id;
			
			$std->exam_schedule_times_id = $exam_schedule_times_id;

			$db->addExam_Schedule($std);

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
								<select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
									<option value="0" selected>
										----- الرجاء اختيار -----
									</option>
									<?
									$aa = $dba->getAllDepas();

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
										<option value="<? echo $aaa->id; ?>">
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
						  <td align="right" id="targetLayer2" ></td>
						  <td align="right" valign="top" > : </td>
						  <td align="right" valign="top" >الساعة</td>
					  </tr>
						<tr>
							<td align="right" id="targetLayer4" >
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم المادة
							</td>
						</tr>
						<tr>
						  <td align="right" ><select name="exam_schedule_days_id" class="field size1" id="exam_schedule_days_id" style="width:300px" dir="rtl">
						    <?
									$aa = $db->getAllExam_Schedule_Days();

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
						    <option value="<? echo $aaa->id; ?>"> (<? echo $aaa->the_day; ?>)(<? echo $aaa->the_date; ?>) </option>
						    <?
									}
									?>
						    </select></td>
						  <td align="right" valign="top" > : </td>
						  <td align="right" valign="top" > اليوم </td>
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

								if( $('#subject_id').length > 0 && $("#exam_schedule_days_id").val() != "" && $("#exam_schedule_times_id").val() != "" )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addExam_Schedule.php",{ depa_id : $("#depa_id").val(),subject_id : $("#subject_id").val(),exam_schedule_days_id : $("#exam_schedule_days_id").val(),exam_schedule_times_id : $("#exam_schedule_times_id").val(), add : "done"  });


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

