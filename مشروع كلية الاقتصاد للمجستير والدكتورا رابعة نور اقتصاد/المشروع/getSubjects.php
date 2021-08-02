<?
extract($_REQUEST);

include("database/Connection.php");

include("database/depas/DepasDbase.php");

$db_depas     = new DepasDbase();

$all_subjects = $db_depas->getAllSubjectsByDebaID($depa_id);

?>
<div style="width: 400px" class="w-50 mx-auto">
	<table width="100%"  border="1" dir="rtl">
		<tr>
			<td width="9%" class="text-center" style="color:blue ">
				<strong>
					جدول مواد كل قسم
				</strong>
			</td>
		</tr>
		<?
		for($i = 0;$i < count($all_subjects);$i++)
		{
			?>
			<tr>
				<td width="11%" class="text-center">
					<? echo $all_subjects[$i]->name; ?>
				</td>
			</tr>
			<?
		}
		?>
	</table>
</div>
<?
mysql_close();
?>
