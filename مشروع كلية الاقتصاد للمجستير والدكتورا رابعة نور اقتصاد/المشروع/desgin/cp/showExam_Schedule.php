<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/exam_schedule_days/Exam_ScheduleDbase.php");

$db  = new Exam_ScheduleDbase();

if($offset == "")
{
	$offset = 0;
}

if($row_count == "")
{
	$row_count = $pagging_count;
}

$all_rows_count = $db->getCountExam_Schedule();

$products       = $db->getExam_Schedule($offset,$row_count);

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="left">
			جدول الامتحانات
		</h2>

		<h2 class="right">
			<a href="#" name="aa3" id="aa3" class="add-button">
				<span>
					امتحان جديد
				</span>
			</a>
			<script type="text/javascript">
				$("#aa3").on('click', function ()
					{
						$("#main_div").load("addExam_Schedule.php");
					});
			</script>
		</h2>
	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?
		if(count($products) != 0)
		{

			?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="96">
						الوقت
					</th>
					<th width="103">
						التاريخ
					</th>
					<th width="129">
						اليوم
					</th>
					<th width="409">
						المادة
					</th>
					<th width="369">
						القسم
					</th>
					<th width="151">
						أدوات التحكم
					</th>
					<th width="53">
						الرقم
					</th>
				</tr>
				<?

				for($a1 = 0;$a1 < count($products);$a1++)
				{

					$products_one = $products[$a1];

					$rrr          = $db->getExam_Schedule_DaysByID($products_one->exam_schedule_days_id);
					
					$eee          = $db->getExam_Schedule_TimesByID($products_one->exam_schedule_times_id);

					?>

					<tr <? echo (( $a1 % 2 ) ? "class='odd'" : "" ); ?> >
						<td align="center">
							<h3>
								<?
								
								
					
								echo $eee->the_time;
								?>
							</h3>
						</td>
						<td align="center">
							<h3>
								<?
								echo $rrr->the_date;
								?>
							</h3>
						</td>
						<td align="center">
							<h3>
								<?
								echo $rrr->the_day;
								?>
							</h3>
						</td>
						<td align="center">
							<h3>
								<?
								$ssss = $dba->getSubjectByID($products_one->subject_id);
								echo $ssss->name;
								?>
							</h3>
						</td>
						<td align="center">
							<h3>
								<?
								$dddd = $dba->getDepaByID($ssss->depa_id);
								echo $dddd->name;
								?>
							</h3>
						</td>
						<td align="center">
							<a href="#" val="<? echo $products_one->id; ?>"  key="deleteExam_Schedule.php" onclick="call_click(this);" class="ico del">
								حذف
							</a>
							<a href="#" val="<? echo $products_one->id; ?>" key="updateExam_Schedule.php" onclick="call_click(this);" class="ico edit">
								تعديل
							</a>
						</td>
						<td align="center">
							<? echo ($all_rows_count - $offset - $a1); ?>
						</td>
					</tr>
					<?

				}

				?>
			</table>
			<!-- Pagging -->
			<div class="pagging">
				<!-- <div class="left">Showing 1-12 of 44</div> -->
				<div class="right">

					<?

					$offset_perv = $offset - $row_count;

					if($offset_perv < 0)
					{
						$offset_perv = 0;
					}
					?>
					<a id="perv_" href="#">
						<<< التالي
					</a>
					<script type="text/javascript">
						$("#perv_").click(function()
							{
								$("#main_div").load("showExam_Schedule.php",{ offset  : <? echo $offset_perv; ?> , row_count  : <? echo $row_count; ?> });
							});
					</script>

					<?
					$offset_next = $offset + $row_count;

					if($offset_next > ($all_rows_count - $row_count))
					{
						$offset_next = ($all_rows_count - $row_count);
					}

					if($offset_next < 0)
					{
						$offset_next = 0;
					}
					?>
					<a id="next_" href="#">
						السابق >>>
					</a>
					<script type="text/javascript">
						$("#next_").click(function()
							{
								$("#main_div").load("showExam_Schedule.php",{ offset  : <? echo $offset_next; ?> , row_count  : <? echo $row_count; ?> });
							});
					</script>
				</div>
			</div>
			<!-- End Pagging -->
			<?
		}
		else
		{
			?>
			<br>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" >
						<p>
							لايوجد امتحانات بعد
						</p>
					</td>
				</tr>
			</table>
			<br>
			<?
		}
		?>

	</div>
	<!-- Table -->
</div>

<script>
	function call_click(tag_here)
	{

		var val = $(tag_here).attr("val");
		var key = $(tag_here).attr("key");


		if(key == "deleteExam_Schedule.php")
		{
			var result = confirm("هل انت متأكد من الحذف؟");

			if (result)
			{
				$("#main_div").load(key,{ MembersID : val });
			}

		}else
		if(key == "updateExam_Schedule.php")
		{

			$("#main_div").load(key,{ MembersID : val  });

		}


	}
</script>

<?
mysql_close();
?>