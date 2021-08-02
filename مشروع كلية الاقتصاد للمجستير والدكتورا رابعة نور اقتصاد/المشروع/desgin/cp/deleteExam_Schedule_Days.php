<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			حذف يوم امتحان
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">

		<?

			if($MembersID != "")
			{

					$db->deleteExam_Schedule_Days($MembersID);
					
					$db->deleteExam_ScheduleByExam_Schedule_Days($MembersID);

					?>

					<div dir="rtl" class="msg msg-ok">
						<p>
							<strong>
								تم الحذف بنجاح
							</strong>
						</p>
					</div>
					<?
				
			}

	

		mysql_close();

		?>
	</div>
</div>
<!-- End Pagging -->

