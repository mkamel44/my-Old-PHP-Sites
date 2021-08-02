<?
extract($_REQUEST);

include("database/Connection.php");

include("database/accepted_students/Accepted_StudentsDbase.php");

$db_accepted_students = new Accepted_StudentsDbase();

include("database/depas/DepasDbase.php");

$db_depa              = new DepasDbase();

?>
<div style="width: 450px">
	<table width="100%"  border="1" dir="rtl">
		<tr>
			<td colspan="23" class="text-center" style="color: blue;">
				جدول  الطلاب المقبوليين
			</td>
		</tr>
			<tr>
				<td width="8%" class="text-center"><strong>
				  ترقيم
				</strong></td>
				<td width="17%" class="text-center"><strong>
				  الرقم الجامعي
				</strong></td>
				<td width="29%" class="text-center"><strong>
				  اسم الطالب
				</strong></td>
				<td width="46%" class="text-center"><strong>
				  القسم
				</strong></td>

			</tr>
			<?
			$all_students         = $db_accepted_students->getAllStudents();

			for($i = 0;$i < count($all_students);$i++)
			{

				$std = $all_students[$i];
				?>
				<tr>
					<td class="text-center">
						<?

						echo ($i + 1);

						?>
					</td>
					<td class="text-center">
						<?

						echo $std->num;

						?>
					</td>
					<td class="text-center">
						<?

						echo $std->name;

						?>
					</td>
					<td class="text-center">
						<?
						$dd = $db_depa->getDepaByID($std->depa_id);

						echo $dd->name;
						?>
					</td>

				</tr>
				<?
			}
			?>
	</table>
</div>
<?
mysql_close();
?>