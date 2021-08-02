
<div class="service-box">
	<h2 class="s-title">
		الرسالة
	</h2>
	<div class="service-ico text-center">

		<span class="ico-circle">
			<i class="ion-email">
			</i>
		</span>

	</div>
	<div class="service-content" >
		<table class="table table-sm" width="100%" dir="rtl">
			<tbody>
				<tr>
					<td width="32%" class="text-right">
						الطالب
					</td>
					<td width="1%" class="text-right">
						:
					</td>
					<td width="67%" class="text-right">
						<? echo $last_msg->name; ?>
					</td>
				</tr>
				<tr>
					<td width="32%" class="text-right">
						العنوان
					</td>
					<td width="1%" class="text-right">
						:
					</td>
					<td width="67%" class="text-right">
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
						المشرف 1
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
						المشرف 2
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<? echo $last_msg->supervisor_name1; ?>
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
