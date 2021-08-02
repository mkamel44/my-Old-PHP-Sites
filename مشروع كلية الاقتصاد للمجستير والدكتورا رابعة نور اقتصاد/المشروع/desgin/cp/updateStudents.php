<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			تعديل طالب
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" ){

			$std = new Students();

			$std->id = $MembersID;

			$std->name = $name;
			
			$std->father = $father;
			
			$std->bdate = $bdate;
			
			$std->sex = $sex;
			
			$std->place = $place;
			
			$std->num = $num;

			$db->updateStudents($std);

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
			$std = $db->getStudentsByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<input name="name" id="name" dir="rtl"  type="text"  class="field size1" value="<? echo $std->name; ?>" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم الطالب
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="num" id="num" dir="rtl"  type="text"  class="field size1" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="<? echo $std->num; ?>" />
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
								<input name="bdate" id="bdate" dir="rtl"  type="text"  class="field size1" value="<? echo ($std->bdate == "0000-00-00" ? "" : $std->bdate ); ?>" />
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
								<input name="father" id="father" dir="rtl"  type="text"  class="field size1" value="<? echo $std->father; ?>" onkeypress="var charCode = (event.which) ? event.which : event.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) { return true;}alert('الرجاء كتابة نص فقط');return false;" />
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
									<option value="ذكر" <? echo ($std->sex == "ذكر" ? "selected" : ""); ?>>
										ذكر
									</option>
									<option value="انثى" <? echo ($std->sex == "انثى" ? "selected" : ""); ?>>
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
								<input name="place" id="place" dir="rtl"  type="text"  class="field size1" value="<? echo $std->place; ?>" />
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

					<input name="addshop2" id="addshop2" type="submit" class="button" value="تعديل" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#name").val() != ""  )
								{

									$("#main_div").load("updateStudents.php",{  name : $("#name").val(),father : $("#father").val(),bdate : $("#bdate").val(),sex : $("#sex").val(),place : $("#place").val(),num : $("#num").val(), MembersID : <? echo $MembersID; ?> , update : "done"  });

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

