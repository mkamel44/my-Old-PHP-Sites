<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?


extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$dba = new CardsDbase();

include("../../database/hotel/HotelDbase.php");

$db = new HotelDbase();

$products = $db->getHotelBookingYes();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
		<td width="18%" align="center" valign="middle" class="style1">نوع الحجز </td>
		<td width="21%" align="center" valign="middle" class="style1">وقت الحجز </td>
		<td width="21%" align="center" valign="middle" class="style1">عدد الليالي </td>
     <td width="22%" align="center" valign="middle" class="style1">اسم الزبون </td>
	    <td width="7%" align="center" valign="middle" class="style1">حضر</td>
		<td width="11%" align="center" valign="middle" class="style1">لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><? 
			
			if($products_one->department_id == 14)
			{
				echo "خمسة نجوم مزوج";
			}
			if($products_one->department_id == 15)
			{
				echo "خمسة نجوم مفرد";
			}
			if($products_one->department_id == 16)
			{
				echo "ثلاث نجوم مزوج";
			}
			if($products_one->department_id == 17)
			{
				echo "ثلاث نجوم مفرد";
			}
			if($products_one->department_id == 18)
			{
				echo "نجمة واحدة مزوج";
			}
			if($products_one->department_id == 19)
			{
				echo "نجمة واحدة مفرد";
			}
			
			 ?></td>
		    <td align="center" dir="rtl"  class="style1"><? echo $products_one->booking_date; ?></td>
		    <td align="center" dir="rtl"  class="style1"><? echo $products_one->night_num; ?></td>
	    <td align="center" dir="rtl"  class="style1"><? 
		$sss =  $dba->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style2" ><a href="#" val="<? echo $products_one->id; ?>" val1="true" onclick="call_click(this);" class="style2">حضر</a></td>
	<td align="center" class="style2" ><a href="#" val="<? echo $products_one->id; ?>" val1="false" onclick="call_click(this);" class="style2">لم يحضر </a></td>
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
					
						$.ajax({
									 url: "done.php", 
									 data: { 
										val: val ,
										val1: val1 ,
										   },
									 success: function(result)
									 {
											if(result == "done")
											{
												$("#mmmmm").load("showBookingsYes.php");
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
    <td align="center" class="style1"><p>لا يوجد حجوزات </p>
    </td>
  </tr>
</table>
<br>
<?
}
mysql_close();
?>