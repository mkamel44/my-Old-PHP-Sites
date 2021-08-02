<?

session_start();

extract($_REQUEST);


	include("../../database/Connection.php");
	
	include("../../database/phones/PhonesDbase.php");
	
	$db = new PhonesDbase();
	
	$products = $db->getPhoneNumbersByCard_id($_SESSION["login_id"]);
	
	if(count($products) != 0)
	{
	?>
	<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0"  >
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
		<? echo ($products_one->phones_done == "" ? "لم يحول" : $products_one->phones_done); ?>
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:160px">
		<? echo ($products_one->phones_date_of_res == "0000-00-00 00:00:00" ? "لم يحول" : $products_one->phones_date_of_res); ?>
		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:160px">
		<? echo $products_one->phones_date_of_req; ?>
		</td>
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
	<?
	}
	mysql_close();
	?>