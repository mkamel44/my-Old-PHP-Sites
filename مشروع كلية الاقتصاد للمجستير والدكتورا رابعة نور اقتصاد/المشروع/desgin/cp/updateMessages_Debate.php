<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/messages/MessagesDbase.php");

$db = new MessagesDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل رسالة
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" )
		{

			$std = new Messages_Debate();

			$std->id = $MembersID;

			$std->messages_id = $messages_id;

			$std->supervisor_name1 = $supervisor_name1;

			$std->supervisor_desc1 = $supervisor_desc1;

			$std->supervisor_name2 = $supervisor_name2;

			$std->supervisor_desc2 = $supervisor_desc2;

			$std->supervisor_name3 = $supervisor_name3;

			$std->supervisor_desc3 = $supervisor_desc3;

			$std->supervisor_name4 = $supervisor_name4;

			$std->supervisor_desc4 = $supervisor_desc4;

			$std->supervisor_name5 = $supervisor_name5;

			$std->supervisor_desc5 = $supervisor_desc5;

			$std->the_time = $the_time;

			$std->the_date = $the_date;

			$std->the_place = $the_place;

			$std->pdf = $pdf;
			
			$std->done = $done;

			$db->updateMessages_Debate($std);

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
			$std = $db->getMessage_DebateByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<select name="messages_id" class="field size1" id="messages_id" style="width:200px" dir="rtl">
									<?
									$aa = $db->getAllMessages();

									for($i = 0;$i < count($aa);$i++)
									{
										$aaa = $aa[$i];
										?>
										<option <? echo ($std->messages_id == $aaa->id ? "selected" : ""); ?> value="<? echo $aaa->id; ?>">
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
								الرسائل
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name1" id="supervisor_name1" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name1; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم العضو 1
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="supervisor_desc1" class="field size1" id="supervisor_desc1" style="width:100px" dir="rtl">
									<option <? echo $std->supervisor_desc1 == "رئيس" ? "selected" : "" ; ?> value="رئيس">
										رئيس
									</option>
									<option <? echo $std->supervisor_desc1 == "عضو" ? "selected" : "" ; ?> value="عضو">
										عضو
									</option>
									<option <? echo $std->supervisor_desc1 == "مشرف" ? "selected" : "" ; ?> value="مشرف">
										مشرف
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								صفة العضو 1
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name2" id="supervisor_name2" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name2; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم العضو 2
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="supervisor_desc2" class="field size1" id="supervisor_desc2" style="width:100px" dir="rtl">
									<option <? echo $std->supervisor_desc2 == "رئيس" ? "selected" : "" ; ?> value="رئيس">
										رئيس
									</option>
									<option <? echo $std->supervisor_desc2 == "عضو" ? "selected" : "" ; ?> value="عضو">
										عضو
									</option>
									<option <? echo $std->supervisor_desc2 == "مشرف" ? "selected" : "" ; ?> value="مشرف">
										مشرف
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								صفة العضو 2
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name3" id="supervisor_name3" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name3; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم العضو 3
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="supervisor_desc3" class="field size1" id="supervisor_desc3" style="width:100px" dir="rtl">
									<option <? echo $std->supervisor_desc3 == "رئيس" ? "selected" : "" ; ?> value="رئيس">
										رئيس
									</option>
									<option <? echo $std->supervisor_desc3 == "عضو" ? "selected" : "" ; ?> value="عضو">
										عضو
									</option>
									<option <? echo $std->supervisor_desc3 == "مشرف" ? "selected" : "" ; ?> value="مشرف">
										مشرف
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								صفة العضو 3
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name4" id="supervisor_name4" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name4; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم العضو 4
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="supervisor_desc4" class="field size1" id="supervisor_desc4" style="width:100px" dir="rtl">
									<option <? echo $std->supervisor_desc4 == "رئيس" ? "selected" : "" ; ?> value="رئيس">
										رئيس
									</option>
									<option <? echo $std->supervisor_desc4 == "عضو" ? "selected" : "" ; ?> value="عضو">
										عضو
									</option>
									<option <? echo $std->supervisor_desc4 == "مشرف" ? "selected" : "" ; ?> value="مشرف">
										مشرف
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								صفة العضو 4
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="supervisor_name5" id="supervisor_name5" dir="rtl"  type="text"  class="field size1" value="<? echo $std->supervisor_name5; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								اسم العضو 5
							</td>
						</tr>
						<tr>
							<td align="right" >
								<select name="supervisor_desc5" class="field size1" id="supervisor_desc5" style="width:100px" dir="rtl">
									<option <? echo $std->supervisor_desc5 == "رئيس" ? "selected" : "" ; ?> value="رئيس">
										رئيس
									</option>
									<option <? echo $std->supervisor_desc5 == "عضو" ? "selected" : "" ; ?> value="عضو">
										عضو
									</option>
									<option <? echo $std->supervisor_desc5 == "مشرف" ? "selected" : "" ; ?> value="مشرف">
										مشرف
									</option>
								</select>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								صفة العضو 5
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="the_time" id="the_time" dir="rtl"  type="text"  class="field size1" value="<? echo $std->the_time; ?>" />
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								الوقت
							</td>
						</tr>
						<tr>
							<td align="right" dir="rtl" >
								<input name="the_date" id="the_date" type="text"  class="field size1" value="<? echo ($std->the_date == "0000-00-00" ? "" : $std->the_date ); ?>" />
								<script>
									$("#the_date").datetimeEntry({datetimeFormat: 'Y-O-D'});
								</script>
							</td>
							<td align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								التاريخ
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="the_place" id="the_place" dir="rtl"  type="text"  class="field size1" value="<? echo $std->the_place; ?>" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								المكان
							</td>
						</tr>
						<tr>
							<td align="right" >
								<input name="done" id="done" dir="rtl"  type="text"  class="field size1" value="<? echo $std->done; ?>" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								النتيجة
							</td>
						</tr>


					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<table width="100%" border="0">
						<tr>
							<td width="86%" align="right" >
								<form id="uploadForm4">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="42%" align="right">
												<div id="targetLayer4">
												<? if($std->pdf != ""){ ?>
													<a id="old_pic" xcx="<? echo $std->pdf; ?>" href="<? echo $std->pdf."?".date('Y-m-d H:i:s'); ?>" target="_blank">
														ملف (<? echo date('Y-m-d H:i:s'); ?>)
													</a>
													<? } ?>
												</div>
											</td>
											<td width="27%" align="right" valign="top">
												<input name="pdf" type="hidden" id="pdf" value="<? echo $std->pdf; ?>" />
												<input name="submit" type="submit" class="button" value="تحميل" />
											</td>
											<td width="31%" align="right" valign="top">
												<input name="userImage" type="file" class="button"  dir="rtl" />
											</td>
										</tr>
									</table>
									<script type="text/javascript">
										$(document).ready(function (e)
											{
												$("#uploadForm4").on('submit',(function(e)
														{
																														
															e.preventDefault();
															$.ajax(
																{
																	url: "upload_pdf.php",
																	type: "POST",
																	data:  new FormData(this),
																	contentType: false,
																	cache: false,
																	processData:false,
																	success: function(dataa)
																	{
																		$.ajax(
																			{
																				url: "upload_update_pdf.php",
																				data:
																				{
																					path : $('#old_pic').attr('xcx') ,
																					id : <? echo $std->id; ?> ,
																					img : dataa 
																				},
																				success: function(ss)
																				{
																				},
																				error: function()
																				{
																				}
																			});

																		d = new Date();
																		$("#targetLayer4").html("<a href='"+ dataa +"?"+ d.getTime() +"' target='_blank'>الملف</a>");
																		$("#pdf").val(dataa);
																	},
																	error: function()
																	{
																	}
																});
														}));
											});
									</script>
								</form>
							</td>
							<td width="1%" align="right" valign="middle" >
								:
							</td>
							<td width="13%" align="right" valign="middle" >
								الملف
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

								if($('#messages_id').val() != null && $("#the_time").val() != "" && $("#the_date").val() != "" && $("#the_place").val() != ""  )
								{
									$("#main_div").load("updateMessages_Debate.php",{  messages_id : $("#messages_id").val(),supervisor_name1 : $("#supervisor_name1").val(),supervisor_desc1 : $("#supervisor_desc1").val(),supervisor_name2: $("#supervisor_name2").val(),supervisor_desc2: $("#supervisor_desc2").val(),supervisor_name3: $("#supervisor_name3").val(),supervisor_desc3: $("#supervisor_desc3").val(),supervisor_name4: $("#supervisor_name4").val(),supervisor_desc4: $("#supervisor_desc4").val(),supervisor_name5: $("#supervisor_name5").val(),supervisor_desc5: $("#supervisor_desc5").val(),the_time: $("#the_time").val(),the_date: $("#the_date").val(),the_place: $("#the_place").val(),pdf: $("#pdf").val(),done: $("#done").val(), MembersID : <? echo $MembersID; ?>, update : "done"  });
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

