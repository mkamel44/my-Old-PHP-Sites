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
			حذف الرسالة
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">

		<?

			if($MembersID != "")
			{

					$db->deleteMessages_Debate($MembersID);

					@unlink($path);

					?>

					<div dir="rtl" class="msg msg-ok">
						<p>
							<strong>
								تم الحذف بنجاح
							</strong>
						</p>
					</div>
					<?
				
			}

	

		mysql_close();

		?>
	</div>
</div>
<!-- End Pagging -->

