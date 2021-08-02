<?
extract($_REQUEST);

include("database/Connection.php");

include("database/depas/DepasDbase.php");

$db_depas = new DepasDbase();


?>
<table width="100%" dir="rtl">
	<tbody>
		<tr>
			<td class="text-center">
				<select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
					<option value="0" disabled selected>
						----- الرجاء اختيار القسم -----
					</option>
					<?
					$aa       = $db_depas->getAllDepas();

					for($i = 0;$i < count($aa);$i++)
					{
						$aaa = $aa[$i];
						?>
						<option num="<? echo $db_depas->getCountSubjectsByDepa($aaa->id); ?>" value="<? echo $aaa->id; ?>">
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

									var name_of_pahe="getAccepted_Students"+num+".php";

									var selectedValue = $(this).val();

									$.ajax(
										{
											url: name_of_pahe,
											type: "POST",
											data:
											{
												depa_id : selectedValue
											},
											success: function(data)
											{
												$("#targetLayer4").html(data);
											},
											error: function()
											{
											}
										});
								});
						});
				</script>
			</td>
		</tr>
		<tr>
			<td id="targetLayer4" class="text-center">&nbsp;
				
			</td>
		</tr>
	</tbody>
</table>
<?
mysql_close();
?>