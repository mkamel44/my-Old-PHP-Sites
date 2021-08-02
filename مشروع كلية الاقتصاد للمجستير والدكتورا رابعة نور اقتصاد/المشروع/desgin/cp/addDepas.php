<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$db = new DepasDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			قسم جديد
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($add != "" ){

			$std = new Depas();

			$std->name = $name;


			$db->addDepas($std);


			?>

			<div dir="rtl" class="msg msg-ok">
				<p>
					<strong>
						تم الاضافة بنجاح
					</strong>
				</p>
			</div>
			<?

		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<input name="name" id="name" dir="rtl"  type="text"  class="field size1" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم القسم
							</td>
						</tr>


					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">

					<input name="addshop2" id="addshop2" type="submit" class="button" value="اضافة" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#name").val() != ""  )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addDepas.php",{  name : $("#name").val(), add : "done"  });
									

								}
								else
								{
									alert(" تأكد من المدخلات ");
								}

							});
					</script>
				</td>
			</tr>

		</table>
		<?
		mysql_close();

		?>
	</div>
</div>
<!-- End Pagging -->

