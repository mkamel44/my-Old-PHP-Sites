<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$db = new DepasDbase();

if($depa_id != 0)
{
	$aa = $db->getAllSubjectsByDebaID($depa_id);

	if(count($aa) > 0)
	{

		?>
		<select name="subject_id" class="field size1" id="subject_id" style="width:200px" dir="rtl">
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
