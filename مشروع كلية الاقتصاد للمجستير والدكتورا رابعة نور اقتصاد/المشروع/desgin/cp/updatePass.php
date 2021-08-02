<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/admin/AdminDbase.php");

$db = new AdminDbase();

$MembersID = 1;

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			تعديل الاسم وكلمة السر
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?

		if($update != "" )
		{

			$std = new Admin();

			$std->id = $MembersID;

			$std->name = $name;

			$std->pass = $pass;

			$db->updateAdmin($std);

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
			$std = $db->getAdmin($MembersID);
		}

		?>
		<table width="100%" border="0">
			<tr>
				<td width="53%" valign="top">
					<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
						<tr>
						  <td align="right" ><input name="name" id="name" dir="rtl"  type="text"  class="field size1" value="<? echo $std->name; ?>" /></td>
						  <td align="right" valign="top" > : </td>
						  <td align="right" valign="top" >الاسم</td>
					  </tr>
						<tr>
							<td align="right" >
								<input name="pass" id="pass" dir="rtl"  type="password"  class="field size1" value="<? echo $std->pass; ?>" />
							</td>
							<td width="5" align="right" valign="top" >
								:
							</td>
							<td align="right" valign="top" >كلمة السر</td>
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

								if($("#name").val() != "" && $("#pass").val() != ""  )
								{
									$("#main_div").load("updatePass.php",{  name : $("#name").val(),pass : $("#pass").val() , update : "done"  });


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

