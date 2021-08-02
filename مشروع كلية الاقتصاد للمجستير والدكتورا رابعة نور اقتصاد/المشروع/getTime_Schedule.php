<?
extract($_REQUEST);

include("database/Connection.php");

include("database/time_schedule/Time_ScheduleDbase.php");

$db_time_schedule = new Time_ScheduleDbase();

include("database/depas/DepasDbase.php");

$db_depas         = new DepasDbase();




?>
<div style="width: 800px">
	<table width="100%"  border="1" dir="rtl" >
	  <tr>
	    <td colspan="11" class="text-center" style="color:blue">جدول الدوام</td>
      </tr>
		<tbody>
			<tr>
				<td width="18%" class="text-center"><strong>
				  اسم المادة
				</strong></td>
				<td width="12%" class="text-center"><strong>
				  الأحد
				</strong></td>
				<td width="5%" class="text-center"><strong>
				  التوقيت
				</strong></td>
				<td width="11%" class="text-center"><strong>
				  الاثنين
				</strong></td>
				<td width="5%" class="text-center"><strong>
				  التوقيت
				</strong></td>
				<td width="12%" class="text-center"><strong>
				  الثلاثاء
				</strong></td>
				<td width="5%" class="text-center"><strong>
				  التوقيت
				</strong></td>
				<td width="12%" class="text-center"><strong>
				  الأربعاء
				</strong></td>
				<td width="5%" class="text-center"><strong>
				  التوقيت
				</strong></td>
				<td width="10%" class="text-center"><strong>
				  الخميس
				</strong></td>
				<td width="5%" class="text-center"><strong>
				  التوقيت
				</strong></td>
			</tr>
			<?
			$all_students     = $db_time_schedule->getAllTime_ScheduleByDepaID($depa_id);

			for($i = 0;$i < count($all_students);$i++)
			{
				$std     = $all_students[$i];
				?>
				<tr>
					<td class="text-center">
						<?

						$subject = $db_depas->getSubjectByID($std->subject_id);

						echo $subject->name;

						?>
					</td>
					<td class="text-center">
						<?

						$a1 = $db_time_schedule->getTime_ScheduleBySubject_IDAndThe_Day($std->subject_id,"الأحد");

						echo $a1->teacher_name;

						?>
					</td>
					<td class="text-center">
						<?
						echo $a1->the_time;
						?>
					</td>
					<td class="text-center">
						<?
						$a2 = $db_time_schedule->getTime_ScheduleBySubject_IDAndThe_Day($std->subject_id,"الاثنين");

						echo $a2->teacher_name;
						?>
					</td>
					<td class="text-center">
						<?

						echo $a2->the_time;

						?>
					</td>
					<td class="text-center">
						<?
						$a3 = $db_time_schedule->getTime_ScheduleBySubject_IDAndThe_Day($std->subject_id,"الثلاثاء");

						echo $a3->teacher_name;
						?>
					</td>
					<td class="text-center">
						<?
						echo $a3->the_time;
						?>
					</td>
					<td class="text-center">
						<?

						$a4 = $db_time_schedule->getTime_ScheduleBySubject_IDAndThe_Day($std->subject_id,"الأربعاء");

						echo $a4->teacher_name;

						?>
					</td>
					<td class="text-center">
						<?
						echo $a4->the_time;
						?>
					</td>
					<td class="text-center">
						<?
						$a5 = $db_time_schedule->getTime_ScheduleBySubject_IDAndThe_Day($std->subject_id,"الخميس");

						echo $a5->teacher_name;
						?>
					</td>
					<td class="text-center">
						<?

						echo $a5->the_time;
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
