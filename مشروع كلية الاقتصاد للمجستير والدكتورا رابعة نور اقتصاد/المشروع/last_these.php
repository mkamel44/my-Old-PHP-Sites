<?
$last_these = $db_theses->getLastThese();
if($last_these->id != "")
{
	?>
	<div class="col-md-4">
		<div class="service-box">
			<h2 class="s-title">
				الاطروحات
			</h2>
			<div class="service-ico text-center">

				<span class="ico-circle">
					<i class="ion-ios-paper">
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
								<? echo $last_these->name; ?>
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
								<? echo $last_these->title; ?>
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
								<? echo $last_these->university_no; ?>
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
								$depa_data = $db_depas->getDepaByID($last_these->depa_id);
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
								<? echo $last_these->supervisor_name; ?>
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
								<? echo $last_these->registration_date; ?>
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
								<? echo $last_these->grant_date; ?>
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
								<? echo $last_these->comments_data; ?>
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