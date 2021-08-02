<?
extract($_REQUEST);

include("database/Connection.php");

include("database/theses/ThesesDbase.php");

$db_theses = new ThesesDbase();

include("database/depas/DepasDbase.php");

$db_depas  = new DepasDbase();


if($registration_date != "" || $title != ""){
	$msgs = $db_theses->getAllThesesByTitleOrDate($title,$registration_date);

}
else
if($depa_id != 0){
	$msgs = $db_theses->getAllThesesByDepaID($depa_id);

}
else
{
	$msgs = $db_theses->getAllTheses();
}


?>
<div class="row">
	<div class="col-md-4" align="center" style="padding: 5px">
		<input type="text" id="title" placeholder="اسم الاطروحة......" value="<? echo ($title != "" ? $title : ""); ?>" style="width: 200px" dir="rtl">
	</div>
	<div class="col-md-4" align="center" style="padding: 5px">
		<input type="text" id="registration_date" placeholder="تاريخ التسجيل....." value="<? echo ($registration_date != "" ? $registration_date : ""); ?>" style="width: 150px" dir="rtl">
		<script>
			$("#registration_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
		</script>
	</div>
	<div class="col-md-4" align="center" style="padding: 5px">
		<button type="button" id="dooo" class="button button-a button-rouded">
			البحث
		</button>
		<script type="text/javascript">
			$(document).ready(function (e)
				{
					$("#dooo").click(function()
						{
							if($("#registration_date").val() != "" || $("#title").val())
							{
								$("#main_div").load("getTheses.php",{ registration_date : $("#registration_date").val() , title : $("#title").val() });
							}
							else
							{
								alert("الرجاء التأكد من المدخلات");
							}

						});
				});
		</script>

	</div>

</div>

<table width="100%"  border="0" dir="rtl" class="table">
	<tbody>
		<tr>
			<td class="text-center">
				<select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
					<option value="0" <? echo ($depa_id == 0 || $depa_id == "" ? "selected" : "") ?>>
						كل الأقسام
					</option>
					<?
					$aa = $db_depas->getAllDepas();

					for($i = 0;$i < count($aa);$i++){
						$aaa = $aa[$i];
						?>
						<option <? echo ($depa_id == $aaa->id  ? "selected" : "") ?> num="<? echo $db_depas->getCountSubjectsByDepa($aaa->id); ?>" value="<? echo $aaa->id; ?>">
							<? echo $aaa->name; ?>
						</option>
						<?
					}
					?>
				</select>
				<script type="text/javascript">
					$(document).ready(function (e)
						{
							$("#depa_id").change(function()
								{

									var num = $("option:selected", this).attr("num");

									var selectedValue = $(this).val();

									$("#main_div").load("getTheses.php",{depa_id : selectedValue});

								});
						});
				</script>
			</td>
		</tr>
	</tbody>
</table>
<div class="row">
	<?
	for($i=-1;$i < count($msgs);){

		?>
		<div class="col-m4-12" style="padding: 5px;width: 340px">
			<?

			$i++;
			$last_msg = $msgs[$i];
			if( $last_msg->title != ""){
				include("theses.php");
			}


			?>

		</div>
		<div class="col-m4-12" style="padding: 5px;width: 340px">
			<?

			$i++;
			$last_msg = $msgs[$i];
			if( $last_msg->title != ""){
				include("theses.php");
			}

			?>
		</div>


		<?

	}
	?>
</div>
<?
mysql_close();
?>
