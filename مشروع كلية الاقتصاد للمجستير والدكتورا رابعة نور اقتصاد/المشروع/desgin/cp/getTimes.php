<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/exam_schedule_days/Exam_ScheduleDbase.php");

$db  = new Exam_ScheduleDbase();

if($depa_id != 0)
{
	$aa = $db->getExam_Schedule_TimesByDepaID($depa_id);

	if(count($aa) > 0)
	{

		echo $aa->the_time;
		?>
		<input type="hidden" name="exam_schedule_times_id" id="exam_schedule_times_id" value="<? echo $aa->id; ?>">
		<?
		
	}
}

mysql_close();
?>
