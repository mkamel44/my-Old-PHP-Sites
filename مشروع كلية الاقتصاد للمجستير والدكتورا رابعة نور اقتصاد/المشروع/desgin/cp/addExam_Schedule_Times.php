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
			ساعة امتحان جديد
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
			
			$std->the_time = $the_time;

			$db->addExam_Schedule_Times($std);

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

							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم القسم
							</td>
						</tr>
						<tr>
						  <td align="right" ><input name="the_time" id="the_time" dir="rtl"  type="text"  class="field size1" /></td>
						  <td align="right" valign="top" > : </td>
						  <td align="right" valign="top" >الساعة</td>
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

								if(  $("#the_time").val() != "" )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addExam_Schedule_Times.php",{ depa_id : $("#depa_id").val(),the_time : $("#the_time").val(), add : "done"  });


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

