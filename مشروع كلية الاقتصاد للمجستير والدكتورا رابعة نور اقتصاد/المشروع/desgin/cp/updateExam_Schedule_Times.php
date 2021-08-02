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
			تعديل ساعة امتحان
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

			$std->the_time = $the_time;

			$db->updateExam_Schedule_Times($std);


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
			$std = $db->getExam_Schedule_TimesByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
						  <td align="right" ><input name="the_time" id="the_time" dir="rtl"  type="text"  class="field size1" value="<? echo $std->the_time; ?>" /></td>
						  <td width="5" align="right" valign="top" > : </td>
						  <td align="right" valign="top" >الساعة</td>
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

								if($("#the_time").val() != "" )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("updateExam_Schedule_Times.php",{  the_time : $("#the_time").val(), MembersID : <? echo $MembersID; ?>, update : "done"  });


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

