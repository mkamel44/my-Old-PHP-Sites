<?
$last_msg = $db_messages->getLastMessage();
if($last_msg->id != "")
{
	?>
	<div class="col-md-4">
		<div class="service-box">
			<h2 class="s-title">
				الرسائل
			</h2>
			<div class="service-ico text-center">

				<span class="ico-circle">
					<i class="ion-email">
					</i>
				</span>

			</div>
			<div class="service-content" >
				<table class="table table-sm" dir="rtl">
					<tbody>
						<tr>
							<td class="text-right">
								الطالب
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->name; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								العنوان
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->title; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								الرقم الجامعي
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->university_no; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								القسم
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<?
								$depa_data = $db_depas->getDepaByID($last_msg->depa_id);
								echo $depa_data->name;
								?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								المشرف
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->supervisor_name; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								تاريخ التسجيل
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->registration_date; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								تاريخ المنح
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->grant_date; ?>
							</td>
						</tr>
						<tr>
							<td class="text-right">
								الملاحظات
							</td>
							<td class="text-right">
								:
							</td>
							<td class="text-right">
								<? echo $last_msg->comments_data; ?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<?
}
?>