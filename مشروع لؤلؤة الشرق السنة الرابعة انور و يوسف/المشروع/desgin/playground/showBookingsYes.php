<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?


extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/cards/CardsDbase.php");

$dba = new CardsDbase();

include("../../database/playground/PlayGroundDbase.php");

$db = new PlayGroundDbase();

$products = $db->getPlayGroundBookingYes();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="15%" align="center" valign="middle" class="style1">نوع الحجز</td>
		<td width="15%" align="center" valign="middle" class="style1">عدد الساعات </td>
		<td width="17%" align="center" valign="middle" class="style1">من الوقت </td>
     <td width="30%" align="center" valign="middle" class="style1">اسم الزبون </td>
	    <td width="8%" align="center" valign="middle" class="style1">حضر</td>
		<td width="15%" align="center" valign="middle" class="style1">لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
     <td align="center" dir="rtl"  class="style1"><? 
			
			if($products_one->department_id == 10)
			{
				echo "صالة البلياردو";
			}
			if($products_one->department_id == 11)
			{
				echo "كرة القدم";
			}
			if($products_one->department_id == 12)
			{
				echo "كرة السلة";
			}
			if($products_one->department_id == 13)
			{
				echo "بلي ستيشن";
			}
		
			
			 ?></td>
		    <td align="center" dir="rtl"  class="style1"><? echo $products_one->hours; ?></td>
		    <td align="center" dir="rtl"  class="style1"><? echo $products_one->start; ?></td>
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