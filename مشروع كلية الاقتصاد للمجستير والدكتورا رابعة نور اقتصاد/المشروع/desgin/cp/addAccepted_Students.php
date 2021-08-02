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

		if($add != "" )
		{

			$std = new Accepted_Students();

			$std->student_id = $student_id;
			
			$std->subject_id = $subject_id;

			$std->practical_sign = $practical_sign;

			$std->theoretical_sign = $theoretical_sign;

			$db->addAccepted_Students($std);

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
					    <td align="right" ><select name="depa_id" class="field size1" id="depa_id" style="width:200px" dir="rtl">
					      <option value="0" selected> ----- الرجاء اختيار ----- </option>
					      <?
									$aa = $dba->getAllDepas();

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
					      <option value="<? echo $aaa->id; ?>"> <? echo $aaa->name; ?> </option>
					      <?
									}
									?>
					      </select>
					      <script type="text/javascript">
									$(document).ready(function (e)
										{
											$("#depa_id").change(function()
												{

													var selectedValue = $(this).val();

													$.ajax(
														{
															url: "getSubjects.php",
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
												
												$.ajax(
														{
															url: "getStudents.php",
															type: "POST",
															data:
															{
																depa_id : selectedValue
															},
															success: function(data)
															{
																$("#targetLayer5").html(data);
															},
															error: function()
															{
															}
														});
												});
										});
								</script></td>
					    <td align="right" valign="top" > : </td>
					    <td align="right" valign="top" > اسم القسم </td>
				      </tr>
					  <tr>
					    <td align="right" id="targetLayer4" >&nbsp;</td>
					    <td align="right" valign="top" > : </td>
					    <td align="right" valign="top" >المادة</td>
				      </tr>
						<tr>
							<td align="right" id="targetLayer5" >&nbsp;</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم الطالب
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="theoretical_sign" id="theoretical_sign" dir="rtl"  type="text"  class="field size1" onkeyup="if(( this.value >= 0 ) && ( this.value <= 60 )){}else{alert('الرجا التأكد من كتابة أرقام و ان تكون العلامة من 0 الى 60 فقط');this.value='';}" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								العلامة النظري
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="practical_sign" id="practical_sign" dir="rtl"  type="text"  class="field size1" onkeyup="if(( this.value >= 0 ) && ( this.value <= 40 )){}else{alert('الرجا التأكد من كتابة أرقام و ان تكون العلامة من 0 الى 40 فقط');this.value='';}" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								العلامة العملي
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

								if( $("#theoretical_sign").val() != "" && $("#practical_sign").val() != "" && $('#subject_id').length > 0 && $('#student_id').length > 0  )
								{
									$("#addshop2").attr("disabled", true);

									$("#main_div").load("addAccepted_Students.php",{  student_id : $("#student_id").val(),subject_id : $("#subject_id").val(),theoretical_sign : $("#theoretical_sign").val(),practical_sign : $("#practical_sign").val(), add : "done"  });


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

