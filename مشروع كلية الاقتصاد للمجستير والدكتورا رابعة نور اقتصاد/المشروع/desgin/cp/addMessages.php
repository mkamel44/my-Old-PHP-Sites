<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/messages/MessagesDbase.php");

$db  = new MessagesDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			رسالة جديدة
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($add != "" ){

			$std = new Messages();

			$std->depa_id = $depa_id;

			$std->university_no = $university_no;

			$std->name = $name;

			$std->title = $title;

			$std->supervisor_name = $supervisor_name;
			
			$std->supervisor_name1 = $supervisor_name1;

			$std->registration_date = $registration_date;

			$std->grant_date = $grant_date;

			$std->comments_data = $comments_data;

			$db->addMessages($std);

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
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم القسم
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="university_no" id="university_no" dir="rtl"  type="text"  onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" class="field size1" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								رقم الجامعي
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
								<input name="title" id="title" dir="rtl"  type="text"  class="field size1" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								العنوان
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name" id="supervisor_name" dir="rtl"  type="text"  class="field size1" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم المشرف 1
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name1" id="supervisor_name1" dir="rtl"  type="text"  class="field size1" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم المشرف 2
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="registration_date" id="registration_date" type="text"  class="field size1" />
								<script>
									$("#registration_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								تاريخ التسجيل
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="grant_date" id="grant_date" type="text"  class="field size1" />
								<script>
									$("#grant_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								تاريخ  المنح
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="comments_data" id="comments_data" dir="rtl"  type="text"  class="field size1" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الملاحظات
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


								if($('#depa_id').val() != null  && $("#university_no").val() != "" && $("#name").val() != "" && $("#title").val() != "" )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addMessages.php",{  depa_id : $("#depa_id").val(),university_no : $("#university_no").val(),name : $("#name").val(),title: $("#title").val(),supervisor_name1 : $("#supervisor_name1").val(),supervisor_name : $("#supervisor_name").val(),registration_date : $("#registration_date").val(),grant_date : $("#grant_date").val(),comments_data : $("#comments_data").val(), add : "done"  });
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

