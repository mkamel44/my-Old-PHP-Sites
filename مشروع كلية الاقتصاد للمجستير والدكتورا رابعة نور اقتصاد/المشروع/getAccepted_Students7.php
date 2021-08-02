<?
extract($_REQUEST);

include("database/Connection.php");

include("database/accepted_students/Accepted_StudentsDbase.php");

$db_accepted_students = new Accepted_StudentsDbase();

include("database/depas/DepasDbase.php");

$db_depas             = new DepasDbase();

$all_subjects         = $db_depas->getAllSubjectsByDebaID($depa_id);

?>
<div style="width: 1250px">
	<table width="100%"  border="1" dir="rtl">
		<tr>
			<td colspan="26" class="text-center" style="color:blue">
				جدول علامات الطلاب المقبوليين
			</td>
		</tr>
			<tr>
			  <td width="32" class="text-center">&nbsp;</td>
				<td width="214" class="text-center"><strong>
				  المواد
				</strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[0]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[1]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[2]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[3]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[4]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[5]->name; ?>
			    </strong></td>
				<td colspan="3" class="text-center">
					<strong><? echo $all_subjects[6]->name; ?>
			    </strong></td>
				<td width="36" class="text-center">&nbsp;</td>
				<td width="46" class="text-center">&nbsp;</td>
				<td width="35" class="text-center">&nbsp;</td>
			</tr>
			<tr>
				<td class="text-center"><strong>
				  ترقيم
				</strong></td>
				<td class="text-center"><strong>
				  أسماء الطلاب
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" ><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td width="30" class="text-center"><strong>
				  عملي
				</strong></td>
				<td width="35" class="text-center"><strong>
				  نظري
				</strong></td>
				<td width="46" class="text-center"><strong>
				  المجموع
				</strong></td>
				<td class="text-center"><strong>
				  النتيجة
				</strong></td>
				<td class="text-center"><strong>
				  المجموع
				</strong></td>
				<td class="text-center"><strong>
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
					<td class="text-center">
						<?

						echo ($i + 1);

						?>
					</td>
					<td class="text-center">
						<?

						echo $std->name;

						?>
					</td>
					<td class="text-center">
						<?

						$data0 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[0]->id);

						echo ($data0->practical_sign == "" ? "0" : $data0->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data0->theoretical_sign == "" ? "0" :$data0->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data0_sum = ($data0->practical_sign + $data0->theoretical_sign);

						echo $data0_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data1 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[1]->id);

						echo ($data1->practical_sign == "" ? "0" :$data1->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data1->theoretical_sign == "" ? "0" : $data1->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data1_sum = ($data1->practical_sign + $data1->theoretical_sign);

						echo $data1_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data2 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[2]->id);

						echo ($data2->practical_sign == "" ? "0" : $data2->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data2->theoretical_sign == "" ? "0" : $data2->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data2_sum = ($data2->practical_sign + $data2->theoretical_sign);

						echo $data2_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data3 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[3]->id);

						echo ($data3->practical_sign == "" ? "0" : $data3->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data3->theoretical_sign == "" ? "0" : $data3->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data3_sum = ($data3->practical_sign + $data3->theoretical_sign);

						echo $data3_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data4 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[4]->id);

						echo ($data4->practical_sign == "" ? "0" : $data4->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data4->theoretical_sign == "" ? : $data4->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data4_sum = ($data4->practical_sign + $data4->theoretical_sign);

						echo $data4_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data5 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[5]->id);

						echo ($data5->practical_sign == "" ? "0" : $data5->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data5->theoretical_sign == "" ? "0" : $data5->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data5_sum = ($data5->practical_sign + $data5->theoretical_sign);

						echo $data5_sum;
						?>
					</td>
					<td class="text-center">
						<?

						$data6 = $db_accepted_students->getAccepted_StudentsBySubjectIDAndStudentID($std->id,$all_subjects[6]->id);

						echo ($data6->practical_sign == "" ? "0" : $data6->practical_sign);

						?>
					</td>
					<td class="text-center">
						<?
						echo ($data6->theoretical_sign == "" ? "0" : $data6->theoretical_sign);
						?>
					</td>
					<td class="text-center">
						<?
						$data6_sum = ($data6->practical_sign + $data6->theoretical_sign);

						echo $data6_sum;
						?>
					</td>
					<td class="text-center">
						<?
						$all_sum = $data0_sum + $data1_sum + $data2_sum + $data3_sum + $data4_sum + $data5_sum + $data6_sum ;

						$all_avr = @round(($all_sum / 7), 2);

						if($all_avr >= 60){
							echo "ناجح";
						}
						else
						{
							echo "راسب";
						}
						?>
					</td>
					<td class="text-center">
						<?
						if($all_avr >= 60){
							echo $all_sum;
						}
						?>
					</td>
					<td class="text-center">
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
