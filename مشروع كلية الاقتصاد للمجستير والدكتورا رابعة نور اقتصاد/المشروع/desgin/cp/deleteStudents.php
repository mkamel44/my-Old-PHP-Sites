<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/accepted_students/Accepted_StudentsDbase.php");

$db = new Accepted_StudentsDbase();

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="right">
			حذف طالب
		</h2>

	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">

		<?

			if($MembersID != "")
			{

					$db->deleteStudents($MembersID);

					$db->deleteAccepted_StudentsByStudentID($MembersID);

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

