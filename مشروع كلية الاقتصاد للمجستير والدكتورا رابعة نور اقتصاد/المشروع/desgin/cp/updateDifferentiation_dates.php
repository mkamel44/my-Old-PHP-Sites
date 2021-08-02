<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/differentiation_dates/Differentiation_datesDbase.php");

$db        = new Differentiation_datesDbase();

$MembersID = 1;

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل مواعيد تسجيل المفاضلة
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" ){

			$std = new Differentiation_dates();

			$std->id = $MembersID;

			$std->the_year = $the_year;

			$std->from_date = $from_date;

			$std->to_date = $to_date;

			$db->updateDifferentiation_dates($std);

			?>

			<div dir="rtl" class="msg msg-ok">
				<p>
					<strong>
						تم التعديل بنجاح
					</strong>
				</p>
			</div>
			<?

		}

		if($MembersID != ""){
			$std = $db->getDifferentiation_dates($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<input name="the_year" id="the_year" dir="rtl"  type="text"  class="field size1" value="<? echo $std->the_year; ?>" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								السنة
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="from_date" id="from_date"  type="text"  class="field size1" value="<? echo ($std->from_date == "0000-00-00" ? "" : $std->from_date ); ?>" />
								<script>
									$("#from_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								من تاريخ
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="to_date" id="to_date"  type="text"  class="field size1" value="<? echo ($std->to_date == "0000-00-00" ? "" : $std->to_date ); ?>" />
								<script>
									$("#to_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الى تاريخ
							</td>
						</tr>


					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">

					<input name="addshop2" id="addshop2" type="submit" class="button" value="تعديل" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#the_year").val() != "" && $("#from_date").val() != "" && $("#to_date").val() != ""  )
								{
									$("#main_div").load("updateDifferentiation_dates.php",{  the_year : $("#the_year").val(),from_date : $("#from_date").val(),to_date : $("#to_date").val() , update : "done"  });


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

