<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/depas/DepasDbase.php");

$db = new DepasDbase();

if($offset == "")
{
	$offset = 0;
}

if($row_count == "")
{
	$row_count = $pagging_count;
}

$all_rows_count = $db->getCountDepas();

$products       = $db->getDepas($offset,$row_count);

?>
<div class="box">
	<!-- Box Head -->
	<div class="box-head">

		<h2 class="left">
			الأقسام
		</h2>

		<h2 class="right">
			<a href="#" name="aa3" id="aa3" class="add-button">
				<span>
					قسم جديد
				</span>
			</a>
			<script type="text/javascript">
				$("#aa3").on('click', function ()
					{

						$("#main_div").load("addDepas.php");
					});
			</script>
		</h2>
	</div>
	<!-- End Box Head -->
	<!-- Table -->
	<div class="table">
		<?
		if(count($products) != 0)
		{

			?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="1067">
						أسماء الأقسام
					</th>
					<th width="145">
						أدوات التحكم
					</th>
					<th width="98">
						الرقم
					</th>
				</tr>
				<?

				for($a1 = 0;$a1 < count($products);$a1++)
				{

					$products_one = $products[$a1];

					?>

					<tr <? echo (( $a1 % 2 ) ? "class='odd'" : "" ); ?> >
						<td align="center">
							<h3>
								<? echo $products_one->name; ?>
							</h3>
						</td>
						<td align="center">
							<a href="#" val="<? echo $products_one->id; ?>"  key="deleteDepas.php" onclick="call_click(this);" class="ico del">
								حذف
							</a>
							<a href="#" val="<? echo $products_one->id; ?>" key="updateDepas.php" onclick="call_click(this);" class="ico edit">
								تعديل
							</a>
						</td>
						<td align="center">
							<? echo ($all_rows_count - $offset - $a1); ?>
						</td>
					</tr>
					<?

				}

				?>
			</table>
			<!-- Pagging -->
			<div class="pagging">
				<!-- <div class="left">Showing 1-12 of 44</div> -->
				<div class="right">

					<?

					$offset_perv = $offset - $row_count;

					if($offset_perv < 0)
					{
						$offset_perv = 0;
					}
					?>
					<a id="perv_" href="#">
						<<< التالي
					</a>
					<script type="text/javascript">
						$("#perv_").click(function()
							{
								$("#main_div").load("showDepas.php",{ offset  : <? echo $offset_perv; ?> , row_count  : <? echo $row_count; ?> });
							});
					</script>

					<?
					$offset_next = $offset + $row_count;

					if($offset_next > ($all_rows_count - $row_count))
					{
						$offset_next = ($all_rows_count - $row_count);
					}

					if($offset_next < 0)
					{
						$offset_next = 0;
					}
					?>
					<a id="next_" href="#">
						السابق >>>
					</a>
					<script type="text/javascript">
						$("#next_").click(function()
							{
								$("#main_div").load("showDepas.php",{ offset  : <? echo $offset_next; ?> , row_count  : <? echo $row_count; ?> });
							});
					</script>
				</div>
			</div>
			<!-- End Pagging -->
			<?
		}
		else
		{
			?>
			<br>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" >
						<p>
							لا يوجد أقسام بعد
						</p>
					</td>
				</tr>
			</table>
			<br>
			<?
		}
		?>

	</div>
	<!-- Table -->
</div>

<script>
	function call_click(tag_here)
	{

		var val = $(tag_here).attr("val");
		var key = $(tag_here).attr("key");


		if(key == "deleteDepas.php")
		{
			var result = confirm("هل انت متأكد من الحذف؟");

			if (result)
			{
				$("#main_div").load(key,{ MembersID : val  });
			}

		}else
		if(key == "updateDepas.php")
		{

			$("#main_div").load(key,{ MembersID : val  });

		}


	}
</script>

<?
mysql_close();
?>