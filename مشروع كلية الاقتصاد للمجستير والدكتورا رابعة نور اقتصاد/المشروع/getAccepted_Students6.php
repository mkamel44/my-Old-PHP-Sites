<?
extract($_REQUEST);

include("database/Connection.php");

include("database/accepted_students/Accepted_StudentsDbase.php");

$db_accepted_students = new Accepted_StudentsDbase();

include("database/depas/DepasDbase.php");

$db_depas             = new DepasDbase();

$all_subjects         = $db_depas->getAllSubjectsByDebaID($depa_id);

?>
<div style="width: 1150px">
	<table width="100%"  border="1" dir="rtl">
		<tr>
			<td colspan="23" style="color: blue;" >
				علامات الطلاب المقبوليين
			</td>
		</tr>
		
			<tr>
				<td width="35" >&nbsp;
					
				</td>
				<td width="240" ><strong>
				  المواد
				</strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[0]->name; ?>
			    </strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[1]->name; ?>
			    </strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[2]->name; ?>
			    </strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[3]->name; ?>
			    </strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[4]->name; ?>
			    </strong></td>
				<td colspan="3" >
					<strong><? echo $all_subjects[5]->name; ?>
			    </strong></td>
				<td width="36" >&nbsp;</td>
				<td width="46" >&nbsp;</td>
				<td width="35" >&nbsp;</td>
			</tr>
			<tr>
				<td ><strong>
				  ترقيم
				</strong></td>
				<td ><strong>
				  أسماء الطلاب
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td width="30" ><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" ><strong>
				  المجموع
				</strong></td>
				<td ><strong>
				  النتيجة
				</strong></td>
				<td ><strong>
				  المجموع
				</strong></td>
				<td ><strong>
				  المعدل
				</strong></td>
			</tr>
			<?
			$all_students = $db_accepted_students->getAllStudentsByDepaID($depa_id);

			for($i = 0;$i < count($all_students);$i++)
			{
				$std = $all_students[$i];
				?>
				<tr>
					<td >
						<?

						echo ($i + 1);

						?>
					</td>
					<td >
						<?

						echo $std->name;

						?>
					</td>
					<td >
						<?

						$data0 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[0]->id);

						echo ($data0->practical_sign == "" ? "0" : $data0->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data0->theoretical_sign == "" ? "0" :$data0->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data0_sum = ($data0->practical_sign + $data0->theoretical_sign);

						echo $data0_sum;
						?>
					</td>
					<td >
						<?

						$data1 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[1]->id);

						echo ($data1->practical_sign == "" ? "0" :$data1->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data1->theoretical_sign == "" ? "0" : $data1->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data1_sum = ($data1->practical_sign + $data1->theoretical_sign);

						echo $data1_sum;
						?>
					</td>
					<td >
						<?

						$data2 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[2]->id);

						echo ($data2->practical_sign == "" ? "0" : $data2->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data2->theoretical_sign == "" ? "0" : $data2->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data2_sum = ($data2->practical_sign + $data2->theoretical_sign);

						echo $data2_sum;
						?>
					</td>
					<td >
						<?

						$data3 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[3]->id);

						echo ($data3->practical_sign == "" ? "0" : $data3->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data3->theoretical_sign == "" ? "0" : $data3->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data3_sum = ($data3->practical_sign + $data3->theoretical_sign);

						echo $data3_sum;
						?>
					</td>
					<td >
						<?

						$data4 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[4]->id);

						echo ($data4->practical_sign == "" ? "0" : $data4->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data4->theoretical_sign == "" ? : $data4->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data4_sum = ($data4->practical_sign + $data4->theoretical_sign);

						echo $data4_sum;
						?>
					</td>
					<td >
						<?

						$data5 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[5]->id);

						echo ($data5->practical_sign == "" ? "0" : $data5->practical_sign);

						?>
					</td>
					<td >
						<?
						echo ($data5->theoretical_sign == "" ? "0" : $data5->theoretical_sign);
						?>
					</td>
					<td >
						<?
						$data5_sum = ($data5->practical_sign + $data5->theoretical_sign);

						echo $data5_sum;
						?>
					</td>
					<td >
						<?
						$all_sum = $data0_sum + $data1_sum + $data2_sum + $data3_sum + $data4_sum + $data5_sum ;

						$all_avr = @round(($all_sum / 6), 2);

						if($all_avr >= 60){
							echo "ناجح";
						}
						else
						{
							echo "راسب";
						}
						?>
					</td>
					<td >
						<?
						if($all_avr >= 60){
							echo $all_sum;
						}
						?>
					</td>
					<td >
						<?
						if($all_avr >= 60){
							echo $all_avr;
						}
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
