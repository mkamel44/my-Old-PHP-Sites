<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/some_text/Some_TextDbase.php");

$db        = new Some_TextDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			<?
				if($MembersID == "1")
				{
					echo "المصاريف الدراسية والأوراق المطلوبة";
				}
					if($MembersID == "2")
				{
					echo "دليل أخلاقيات الطلاب";
				}
					if($MembersID == "3")
				{
					echo "السنة التمهيدية";
				}
					if($MembersID == "4")
				{
					echo "سنة الماجستير";
				}
					if($MembersID == "5")
				{
					echo "سنة الدكتوراه";
				}
				?>	 
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">

		<?


		if($update != "" )
		{

			$std = new Some_Text();

			$std->id = $MembersID;

			$std->mytext = $mytext;

			$db->updateText($std);


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
			$std = $db->getText($MembersID);
		}


		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
							<td align="right" >
								<textarea name="mytext" cols="10" rows="10" id="mytext" class="field size1" dir="rtl" style="width: 100%;height: 400px; direction: rtl;">
									<? echo $std->mytext; ?>
								</textarea>
								<script>
									new nicEditor({iconsPath : 'nicEdit/nicEditorIcons.gif'},{fullPanel : true}).panelInstance('mytext');
								</script>
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >
								النص
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

								var mytext = nicEditors.findEditor('mytext');

								if(mytext.getContent() != "" )
								{

									$("#main_div").load("updateText.php",{  mytext : mytext.getContent() , MembersID : <? echo $MembersID; ?>, update : "done"  });

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

