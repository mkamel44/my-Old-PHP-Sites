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

		if($update != "" )
		{

			$std = new Accepted_Students();

			$std->id = $MembersID;

			$std->practical_sign = $practical_sign;

			$std->theoretical_sign = $theoretical_sign;

			$db->updateAccepted_Students($std);

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
			$std = $db->getAccepted_StudentsByID($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
						  <td align="right" id="targetLayer5" >
							  <? 
							  $sss = $db->getStudentsByID($std->student_id);
							  
							  echo $sss->name;
							  ?>
							</td>
						  <td width="5" align="right" valign="top" > : </td>
						  <td align="right" valign="top" > اسم الطالب </td>
					  </tr>
						<tr>
							<td align="right" >
								<input name="theoretical_sign" id="theoretical_sign" dir="rtl"  type="text"  class="field size1" value="<? echo $std->theoretical_sign; ?>" onkeyup="if(( this.value >= 0 ) && ( this.value <= 60 )){}else{alert('الرجا التأكد من كتابة أرقام و ان تكون العلامة من 0 الى 60 فقط');this.value='';}" />
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
								<input name="practical_sign" id="practical_sign" dir="rtl"  type="text"  class="field size1" value="<? echo $std->practical_sign; ?>" onkeyup="if(( this.value >= 0 ) && ( this.value <= 40 )){}else{alert('الرجا التأكد من كتابة أرقام و ان تكون العلامة من 0 الى 40 فقط');this.value='';}" />
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

					<input name="addshop2" id="addshop2" type="submit" class="button" value="تعديل" />

					<script type="text/javascript">

						$("#addshop2").on('click', function ()
							{

								if($("#theoretical_sign").val() != "" && $("#practical_sign").val() != ""   )
								{

									$("#main_div").load("updateAccepted_Students.php",{  theoretical_sign : $("#theoretical_sign").val(),practical_sign : $("#practical_sign").val(), MembersID : <? echo $MembersID; ?> , update : "done"  });

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

