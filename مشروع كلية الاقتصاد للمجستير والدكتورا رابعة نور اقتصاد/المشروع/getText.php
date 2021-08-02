<?
extract($_REQUEST);

include("database/Connection.php");

include("database/some_text/Some_TextDbase.php");

$db_some_text     = new Some_TextDbase();

$my_text = $db_some_text->getText($text_id);

?>
<div style="width: 100%" >
	<table width="100%"  border="0" dir="rtl" class="table">
		<tbody>
			<tr>
				<td width="9%" class="text-">
				<?
				if($text_id == "1")
				{
					echo "المصاريف الدراسية والأوراق المطلوبة";
				}
					if($text_id == "2")
				{
					echo "دليل أخلاقيات الطلاب";
				}
					if($text_id == "3")
				{
					echo "السنة التمهيدية";
				}
					if($text_id == "4")
				{
					echo "سنة الماجستير";
				}
					if($text_id == "5")
				{
					echo "سنة الدكتوراه";
				}
				?>	
					</td>
			</tr>
				<tr>
					<td width="11%" dir="rtl">
						<? echo $my_text->mytext; ?>
					</td>
				</tr>
					</tbody>
	</table>
</div>
<?
mysql_close();
?>
