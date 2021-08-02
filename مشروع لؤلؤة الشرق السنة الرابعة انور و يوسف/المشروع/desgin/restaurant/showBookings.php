<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?


extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$dba = new CardsDbase();

include("../../database/game_swimming/Game_SwimmingDbase.php");

$db = new Game_SwimmingDbase();

$products = $db->getGame_SwimmingBooking2();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  		<td width="16%" align="center" valign="middle" class="style1">نوع الحجز </td>
		<td width="31%" align="center" valign="middle" class="style1">وقت الحجز </td>
     <td width="27%" align="center" valign="middle" class="style1">اسم الزبون </td>
	    <td width="11%" align="center" valign="middle" class="style1">الموافقة</td>
		<td width="15%" align="center" valign="middle" class="style1">عدم الموافقة</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
     <td align="center" dir="rtl"  class="style1"><? 
			
			if($products_one->department_id == 8)
			{
				echo "كفتيريا";
			}
			if($products_one->department_id == 9)
			{
				echo "مطاعم";
			}

			 ?></td>
		    <td align="center" dir="rtl"  class="style1"><? echo $products_one->booking_date; ?></td>
	    <td align="center" dir="rtl"  class="style1"><? 
		$sss =  $dba->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style2" ><a href="#" val="<? echo $products_one->id; ?>" val1="true" val2="<? echo $products_one->price; ?>" val3="<? echo $products_one->card_id; ?>" onclick="call_click(this);" class="style2">الموافقة</a></td>
	<td align="center" class="style2" ><a href="#" val="<? echo $products_one->id; ?>" val1="false" val2="<? echo $products_one->price; ?>" val3="<? echo $products_one->card_id; ?>" onclick="call_click(this);" class="style2">عدم الموافقة</a></td>
  </tr>

  <?

}

?> 
</table>

<script>
function call_click(tag_here)
	{

						var val = $(tag_here).attr("val");
						var val1 = $(tag_here).attr("val1");
						var val2 = $(tag_here).attr("val2");
						var val3 = $(tag_here).attr("val3");
					
						$.ajax({
									 url: "approval.php", 
									 data: { 
										val: val ,
										val1: val1 ,
										val2: val2 ,
										val3: val3 
										   },
									 success: function(result)
									 {
											if(result == "done")
											{
												$("#mmmm").load("showBookings.php");
											}
									 }
							});

		}
</script>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="num">
  <tr>
    <td height="32" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>
<?
}
else
{
?>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p>لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>