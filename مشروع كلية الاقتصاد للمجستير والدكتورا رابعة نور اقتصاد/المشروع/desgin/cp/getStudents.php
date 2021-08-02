<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/accepted_students/Accepted_StudentsDbase.php");

$db = new Accepted_StudentsDbase();

if($depa_id != 0 )
{
	$aa = $db->getAllStudentsByDepaID($depa_id);

	if(count($aa) > 0)
	{

		?>
		<select name="student_id" class="field size1" id="student_id" style="width:200px" dir="rtl">
			<?


			for($i = 0;$i < count($aa);$i++){
				$aaa = $aa[$i];
				?>
				<option value="<? echo $aaa->id; ?>">
					<? echo $aaa->name; ?>
				</option>
				<?
			}
			?>
		</select>
		<?
	}
}

mysql_close();
?>
