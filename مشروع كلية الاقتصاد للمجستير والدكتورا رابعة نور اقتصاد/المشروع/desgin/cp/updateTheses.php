<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$dba = new DepasDbase();

include("../../database/theses/ThesesDbase.php");

$db  = new ThesesDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل اطروحة
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" ){

			$std = new Theses();

			$std->id = $MembersID;

			$std->depa_id = $depa_id;

			$std->university_no = $university_no;

			$std->name = $name;

			$std->title = $title;

			$std->supervisor_name = $supervisor_name;
			
			$std->supervisor_name1 = $supervisor_name1;

			$std->registration_date = $registration_date;

			$std->grant_date = $grant_date;

			$std->comments_data = $comments_data;

			$db->updateTheses($std);

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
		
		if($MembersID != "")
		{
			$std = $db->getTheseByID($MembersID);
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
										<option <? echo ($std->depa_id == $aaa->id ? "selected" : ""); ?> value="<? echo $aaa->id; ?>">
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
								<input name="university_no" id="university_no" dir="rtl"  type="text"  class="field size1" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="<? echo $std->university_no; ?>" />
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
								<input name="name" id="name" dir="rtl"  type="text"  class="field size1" value="<? echo $std->name; ?>" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
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
								<input name="title" id="title" dir="rtl"  type="text"  class="field size1" value="<? echo $std->title; ?>" />
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
								<input name="supervisor_name" id="supervisor_name" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name; ?>" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
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
								<input name="supervisor_name1" id="supervisor_name1" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name1; ?>" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
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
								<input name="registration_date" id="registration_date" type="text"  class="field size1" value="<? echo ($std->registration_date == "0000-00-00" ? "" : $std->registration_date ); ?>" />
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
								<input name="grant_date" id="grant_date" type="text"  class="field size1" value="<? echo ($std->grant_date == "0000-00-00" ? "" : $std->grant_date ); ?>" />
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
								<input name="comments_data" id="comments_data" dir="rtl"  type="text"  class="field size1" value="<? echo $std->comments_data; ?>" />
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

					<input name="addshop2" id="addshop2" type="submit" class="button" value="تعديل" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($('#depa_id').val() != null && $("#university_no").val() != "" && $("#name").val() != "" && $("#title").val() != ""  )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("updateTheses.php",{  depa_id : $("#depa_id").val(),university_no : $("#university_no").val(),name : $("#name").val(),title: $("#title").val(),supervisor_name : $("#supervisor_name").val(),supervisor_name1 : $("#supervisor_name1").val(),registration_date : $("#registration_date").val(),grant_date : $("#grant_date").val(),comments_data : $("#comments_data").val(), MembersID : <? echo $MembersID; ?>, update : "done"  });
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

