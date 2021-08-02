<?
extract($_REQUEST);

include("database/Connection.php");

include("database/exam_schedule_days/Exam_ScheduleDbase.php");

$db_exam_schedule = new Exam_ScheduleDbase();

include("database/depas/DepasDbase.php");

$db_depas         = new DepasDbase();

$all_depa         = $db_depas->getAllDepas();


?>
<div style="width: 1000px">
	<table width="100%"  border="1" dir="rtl" >
	  <tr>
	    <td colspan="9" class="text-center" style="color:blue">جدول الامتحانات</td>
      </tr>
		<tbody>
			<tr>
				<td width="11%" class="text-center"><strong>
				  اليوم و التاريخ
				</strong></td>
				<td width="12%" class="text-center">
					<strong>
					<?

					echo $all_depa[0]->name;

					$time_depa0 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[0]->id);

					echo "<br />";

					echo $time_depa0->the_time;

					?>

			    </strong></td>
				<td width="9%" class="text-center">
					<strong>
					<?

					echo $all_depa[1]->name;

					$time_depa1 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[1]->id);

					echo "<br />";

					echo $time_depa1->the_time;

					?>
			    </strong></td>
				<td width="9%" class="text-center">
					<strong>
					<?

					echo $all_depa[2]->name;

					$time_depa2 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[2]->id);

					echo "<br />";

					echo $time_depa2->the_time;

					?>
			    </strong></td>
				<td width="13%" class="text-center">
					<strong>
					<?

					echo $all_depa[3]->name;

					$time_depa3 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[3]->id);

					echo "<br />";

					echo $time_depa3->the_time;

					?>
			    </strong></td>
				<td width="8%" class="text-center">
					<strong>
					<?

					echo $all_depa[4]->name;

					$time_depa4 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[4]->id);

					echo "<br />";

					echo $time_depa4->the_time;

					?>
			    </strong></td>
				<td width="13%" class="text-center">
					<strong>
					<?

					echo $all_depa[5]->name;

					$time_depa5 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[5]->id);

					echo "<br />";

					echo $time_depa5->the_time;

					?>
			    </strong></td>
				<td width="16%" class="text-center">
					<strong>
					<?

					echo $all_depa[6]->name;

					$time_depa6 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[6]->id);

					echo "<br />";

					echo $time_depa6->the_time;

					?>
			    </strong></td>
				<td width="9%" class="text-center">
					<strong>
					<?

					echo $all_depa[7]->name;

					$time_depa7 = $db_exam_schedule->getExam_Schedule_TimesByDepaID($all_depa[7]->id);

					echo "<br />";

					echo $time_depa7->the_time;

					?>
			    </strong></td>
			</tr>
			<?
			$all_exam_schedule_days = $db_exam_schedule->getAllExam_Schedule_Days();

			for($i = 0;$i < count($all_exam_schedule_days);$i++)
			{
				$exam_schedule_days = $all_exam_schedule_days[$i];
				?>
				<tr>
					<td class="text-center">
						<?

						echo $exam_schedule_days->the_day;
						echo "<br />";
						echo $exam_schedule_days->the_date;


						?>
					</td>
					<td class="text-center">
						<?

						$a0 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[0]->id,$exam_schedule_days->id,$time_depa0->id);

						if($a0->subject_id != ""){
							$sub0 = $db_depas->getSubjectByID($a0->subject_id);

							echo $sub0->name;
						}

						?>
					</td>
					<td class="text-center">
						<?

						$a1 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[1]->id,$exam_schedule_days->id,$time_depa1->id);

						if($a1->subject_id != ""){

							$sub1 = $db_depas->getSubjectByID($a1->subject_id);

							echo $sub1->name;
						}

						?>
					</td>
					<td class="text-center">
						<?

						$a2 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[2]->id,$exam_schedule_days->id,$time_depa2->id);

						if($a2->subject_id != ""){

							$sub2 = $db_depas->getSubjectByID($a2->subject_id);

							echo $sub2->name;
						}
						?>
					</td>
					<td class="text-center">
						<?

						$a3 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[3]->id,$exam_schedule_days->id,$time_depa3->id);

						if($a3->subject_id != ""){

							$sub3 = $db_depas->getSubjectByID($a3->subject_id);

							echo $sub3->name;
						}
						?>
					</td>
					<td class="text-center">
						<?

						$a4 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[4]->id,$exam_schedule_days->id,$time_depa4->id);

						if($a4->subject_id != ""){

							$sub4 = $db_depas->getSubjectByID($a4->subject_id);

							echo $sub4->name;
						}
						?>
					</td>
					<td class="text-center">
						<?

						$a5 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[5]->id,$exam_schedule_days->id,$time_depa5->id);

						if($a5->subject_id != ""){

							$sub5 = $db_depas->getSubjectByID($a5->subject_id);

							echo $sub5->name;
						}
						?>
					</td>
					<td class="text-center">
						<?

						$a6 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[6]->id,$exam_schedule_days->id,$time_depa6->id);

						if($a6->subject_id != ""){

							$sub6 = $db_depas->getSubjectByID($a6->subject_id);

							echo $sub6->name;

						}

						?>
					</td>
					<td class="text-center">
						<?

						$a7 = $db_exam_schedule->getExam_Schedule_DaysByDepIDAndThe_DateAndThe_Day($all_depa[7]->id,$exam_schedule_days->id,$time_depa7->id);

						if($a7->subject_id != ""){

							$sub7 = $db_depas->getSubjectByID($a7->subject_id);

							echo $sub7->name;

						}

						?>
					</td>
				</tr>
				<?
			}
			?>
		</tbody>
	</table>
</div>
<?
mysql_close();
?>
