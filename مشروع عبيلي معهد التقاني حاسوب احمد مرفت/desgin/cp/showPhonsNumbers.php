<?

session_start();

extract($_REQUEST);


	include("../../database/Connection.php");
	
	include("../../database/phones/PhonesDbase.php");
	
	$db = new PhonesDbase();
	
	$products = $db->getPhoneNumbersNotGo();
	
	if(count($products) != 0)
	{
	?>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
		<?
	
		$a2 = "bg-info";
		$a3 = true;
	
	 for($a1=0;$a1<count($products);$a1++)
	 {

			if($a3)
			{
				$a2 = "label-default";
				$a3 = false;
			}
			else
			{
				$a2 = "bg-danger";
				$a3 = true;	
			}

	  $products_one = $products[$a1];
	 
		?>
	  <tr>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:80px">
		<a href="#" phones_id="<? echo $products_one->phones_id; ?>" phones_card_id="<? echo $products_one->phones_card_id; ?>" phones_done="false" phones_units="<? echo $products_one->phones_units; ?>" onclick="call_click(this);" >false</a> - 
		<a href="#" phones_id="<? echo $products_one->phones_id; ?>" phones_card_id="<? echo $products_one->phones_card_id; ?>" phones_done="true" phones_units="<? echo $products_one->phones_units; ?>" onclick="call_click(this);" >true</a>
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:160px">
		<? echo $products_one->phones_date_of_req; ?>
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" dir="rtl" style="width:100px">
		<? echo $db->getPhoneAmount($products_one->phones_card_id); ?>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" dir="rtl" style="width:100px">
		<? echo $products_one->phones_price; ?> ل س
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:100px;font-size:20px">
		<? echo $products_one->phones_units; ?>
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:200px;font-size:20px">
		<? echo $products_one->phones_number; ?>
		</td>
	  </tr>
	  <?
	
	}
	
	?> 
</table>
<script>
function call_click(tag_here)
	{

						var phones_id = $(tag_here).attr("phones_id");
						var phones_done = $(tag_here).attr("phones_done");
						var phones_units = $(tag_here).attr("phones_units");
						var phones_card_id = $(tag_here).attr("phones_card_id");
						

						$.ajax({
									 url: "done.php", 
									 data: { 
										phones_id: phones_id ,
										phones_units: phones_units ,
										phones_card_id: phones_card_id ,
										phones_done: phones_done 
										   },
									 success: function(result)
									 {
											if(result == "done")
											{
												$("#all_phones_numbers").load("showPhonsNumbers.php");
											}
									 }
											});
				

		}
</script>

	<?
	}
	mysql_close();
	?>