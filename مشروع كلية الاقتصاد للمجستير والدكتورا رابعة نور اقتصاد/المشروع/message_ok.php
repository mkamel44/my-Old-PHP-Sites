
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
						<? echo $last_msg_o->name; ?>
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
						<? echo $last_msg_o->title; ?>
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
						<? echo $last_msg_o->university_no; ?>
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
						$depa_data = $db_depas->getDepaByID($last_msg_o->depa_id);
						echo $depa_data->name;
						?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						العضو الأول
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<?
						if($last_msg->supervisor_name1 != "")
						{
							?>
							<? echo $last_msg->supervisor_desc1; ?> <? echo $last_msg->supervisor_name1; ?>
							<?
						} ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						العضو الثاني
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<?
						if($last_msg->supervisor_name2 != "")
						{
							?>
							<? echo $last_msg->supervisor_desc2; ?> <? echo $last_msg->supervisor_name2; ?>
							<?
						} ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						العضو الثالث
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<?
						if($last_msg->supervisor_name3 != "")
						{
							?>
							<? echo $last_msg->supervisor_desc3; ?> <? echo $last_msg->supervisor_name3; ?>
							<?
						} ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						العضو الرابع
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<?
						if($last_msg->supervisor_name4 != "")
						{
							?>
							<? echo $last_msg->supervisor_desc4; ?> <? echo $last_msg->supervisor_name4; ?>
							<?
						} ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						العضو الخامس
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<?
						if($last_msg->supervisor_name5 != "")
						{
							?>
							<? echo $last_msg->supervisor_desc5; ?> <? echo $last_msg->supervisor_name5; ?>
							<?
						} ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						وقت المناقشة
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<? echo $last_msg->the_time; ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						تاريخ المناقشة
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<? echo $last_msg->the_date; ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						مكان المناقشة
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<? echo $last_msg->the_place; ?>
					</td>
				</tr>
				<tr>
					<td class="text-right">
						النتيجة
					</td>
					<td class="text-right">
						:
					</td>
					<td class="text-right">
						<? echo $last_msg->done; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">
						<a href='<? echo $last_msg->pdf; ?>' target='_blank'>الملف</a>
					</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
