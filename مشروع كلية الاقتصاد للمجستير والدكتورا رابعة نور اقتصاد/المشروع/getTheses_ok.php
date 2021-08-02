<?
extract($_REQUEST);

include("database/Connection.php");

include("database/theses/ThesesDbase.php");

$db_theses = new ThesesDbase();

include("database/depas/DepasDbase.php");

$db_depas  = new DepasDbase();


if($the_date != "")
{
	$msgs = $db_theses->getAllTheses_DebateByDate($the_date);

}
else
if($depa_id != 0)
{
	$msgs = $db_theses->getAllTheses_DebateByDepaID($depa_id);

}
else
{
	$msgs = $db_theses->getAllTheses_Debate();
}


?>

<div class="row">
	<div class="col-md-6" align="center" style="padding: 5px">
		<input type="text" id="the_date" placeholder="تاريخ المناقشة....." value="<? echo ($the_date != "" ? $the_date : ""); ?>" style="width: 150px" dir="rtl">
		<script>
			$("#the_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
		</script>
	</div>
	<div class="col-md-6" align="center" style="padding: 5px">
		<button type="button" id="dooo" class="button button-a button-rouded">
			البحث
		</button>

		<script type="text/javascript">
			$(document).ready(function (e)
				{
					$("#dooo").click(function()
						{
							if($("#the_date").val() != "")
							{
								$("#main_div").load("getTheses_ok.php",{ the_date : $("#the_date").val() });
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

									$("#main_div").load("getTheses_ok.php",{depa_id : selectedValue});

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
			if( $last_msg->id != ""){
				$last_msg_o = $db_theses->getTheseByID($last_msg->theses_id);
				include("theses_ok.php");
			}


			?>

		</div>
		<div class="col-m4-12" style="padding: 5px;width: 340px">

			<?

			$i++;
			$last_msg = $msgs[$i];
			if( $last_msg->id != ""){
				$last_msg_o = $db_theses->getTheseByID($last_msg->theses_id);
				include("theses_ok.php");
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
