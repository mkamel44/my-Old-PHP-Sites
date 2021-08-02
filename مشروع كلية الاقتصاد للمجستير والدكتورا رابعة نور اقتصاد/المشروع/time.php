<div class="col-md-4">
	<div class="service-box">
		<h2 class="s-title">
			<? $data_diff = $db_differentiation->getDifferentiation_dates("1"); ?>
			مواعيد تسجيل المفاضلة
			<br />
			سنة <? echo $data_diff->the_year; ?>
		</h2>
		<div class="service-ico text-center">

			<span class="ico-circle">
				<i class="ion-android-time">
				</i>
			</span>

		</div>
		<div class="service-content">
			<table class="table table-sm" dir="rtl">
				<tbody>
					<tr>
						<td class="text-right">
							من تاريخ
						</td>
						<td class="text-right">
							:
						</td>
						<td class="text-left">
							<? echo $data_diff->from_date; ?>
						</td>
					</tr>
					<tr>
						<td class="text-right">
							الى تاريخ
						</td>
						<td class="text-right">
							:
						</td>
						<td class="text-left">
							<? echo $data_diff->to_date; ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>