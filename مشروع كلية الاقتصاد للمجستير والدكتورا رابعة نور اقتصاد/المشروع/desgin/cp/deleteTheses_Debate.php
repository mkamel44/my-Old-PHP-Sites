<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/theses/ThesesDbase.php");

$db = new ThesesDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			حذف الاطروحة 
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">

		<?

			if($MembersID != "")
			{

					$db->deleteTheses_Debate($MembersID);
					
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

