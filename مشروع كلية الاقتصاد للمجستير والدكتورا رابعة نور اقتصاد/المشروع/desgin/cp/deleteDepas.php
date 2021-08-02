<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$db = new DepasDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			حذف القسم
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">



		<?


			if($MembersID != "")
			{

				if($db->checkdeletingDepa($MembersID) && $db->checkdeletingDepaFromMessages(($MembersID)) && $db->checkdeletingDepaFromTheses($MembersID))
				{

					$db->deleteDepas($MembersID);

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
				else
				{
					?>

					<div dir="rtl" class="msg msg-error">
						<p>
							<strong>
								هذا العنصر مرتبط 
							</strong>
						</p>
					</div>
					<?
				}

			}

	

		mysql_close();

		?>
	</div>
</div>
<!-- End Pagging -->

