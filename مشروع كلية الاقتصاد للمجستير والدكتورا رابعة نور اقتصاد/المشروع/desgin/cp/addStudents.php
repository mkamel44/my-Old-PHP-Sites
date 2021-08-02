<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/accepted_students/Accepted_StudentsDbase.php");

$db  = new Accepted_StudentsDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			طالب جديد
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($add != "" ){

			$std = new Students();

			$std->name = $name;

			$std->depa_id = $depa_id;

			$std->father = $father;
			
			$std->bdate = $bdate;
			
			$std->sex = $sex;
			
			$std->place = $place;
			
			$std->num = $num;

			$db->addStudents($std);

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
								<select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
									<?
									$aa = $dba->getAllDepas();

									for($i = 0;$i < count($aa);$i++){
										$aaa = $aa[$i];
										?>
										<option value="<? echo $aaa->id; ?>">
											<? echo $aaa->name; ?>
										</option>
										<?
									}
									?>
								</select>
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم القسم
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="name" id="name" dir="rtl"  type="text"  class="field size1" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم الطالب
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="num" id="num" dir="rtl"  type="text" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}"  class="field size1" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الرقم الجامعي
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="bdate" id="bdate" dir="rtl"  type="text"  class="field size1" />
								<script>
									$("#bdate").datetimeEntry({datetimeFormat: 'Y-O-D',maxDatetime: '-22y'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								المواليد
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="father" id="father" dir="rtl"  type="text"  class="field size1" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الأب
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="sex" class="field size1" id="sex" style="width:100px" dir="rtl">
									<option value="ذكر">
										ذكر
									</option>
									<option value="انثى">
										انثى
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الجنس
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="place" id="place" dir="rtl"  type="text"  class="field size1" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								السكن
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

									$("#main_div").load("addStudents.php",{  name : $("#name").val(),father : $("#father").val(),bdate : $("#bdate").val(),sex : $("#sex").val(),place : $("#place").val(),num : $("#num").val(),depa_id : $("#depa_id").val(), add : "done"  });


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

