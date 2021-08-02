<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/cards/CardsDbase.php");

$card_db = new CardsDbase();

include("database/game_swimming/Game_SwimmingDbase.php");

$db = new Game_SwimmingDbase();

include("database/playground/PlayGroundDbase.php");

$db1 = new PlayGroundDbase();

include("database/hotel/HotelDbase.php");

$db2 = new HotelDbase();

include("database/snacks/SnacksDbase.php");

$db3 = new SnacksDbase();

include("database/basket/BasketDbase.php");

$db4 = new BasketDbase();


?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">العاب الأطفال</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db->getBookingByCardID($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="11%" align="center" valign="middle" class="style435">نوع الحجز</td>
		<td width="28%" align="center" valign="middle" class="style435">التاريخ المطلوب </td>
		<td width="16%" align="center" valign="middle" class="style435">كلفة البطاقة </td>
     <td width="16%" align="center" valign="middle" class="style435">اسم الزبون </td>
	    <td width="15%" align="center" valign="middle" class="style435">موافقة او لم يوافق </td>
		<td width="14%" align="center" valign="middle" class="style435">حضر او لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
  		    <td align="center" dir="rtl"  class="style435"><? 
			
			if($products_one->department_id == 1)
			{
				echo "مرجيح";
			}
			if($products_one->department_id == 2)
			{
				echo "زحليطات";
			}
			if($products_one->department_id == 3)
			{
				echo "سفينة";
			}
			if($products_one->department_id == 4)
			{
				echo "قلابات";
			}
			
			 ?></td>
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->booking_date; ?></td>
    <td align="center" dir="rtl"  class="style435"><? echo $products_one->price; ?></td>
	    <td align="center" dir="rtl"  class="style435"><? 
		$sss =  $card_db->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->approval == "true")
	{
		echo "موافق";
	}
	
	if($products_one->approval == "false")
	{
		echo "غير موافق";
	}
	
	if($products_one->approval == "")
	{
		echo "ليس بعد";
	}
	
	 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->done == "true")
	{
		echo "حضر";
	}
	
	if($products_one->done == "false")
	{
		echo "لم حضر";
	}
	
	if($products_one->approval == "true" &&  $products_one->done == "")
	{
		echo "ليس بعد";
	}
	
	if($products_one->approval == "false" &&  $products_one->done == "")
	{
		echo "غير موافق";
	}
	
	 ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">مسابح</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db->getBookingByCardID1($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="11%" align="center" valign="middle" class="style435">نوع الحجز</td>
		<td width="28%" align="center" valign="middle" class="style435">التاريخ المطلوب </td>
		<td width="16%" align="center" valign="middle" class="style435">كلفة البطاقة </td>
     <td width="16%" align="center" valign="middle" class="style435">اسم الزبون </td>
	    <td width="15%" align="center" valign="middle" class="style435">موافقة او لم يوافق </td>
		<td width="14%" align="center" valign="middle" class="style435">حضر او لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
  		    <td align="center" dir="rtl"  class="style435"><? 
			
			if($products_one->department_id == 5)
			{
				echo "مسبح اناث";
			}
			if($products_one->department_id == 6)
			{
				echo "مسبح ذكور";
			}
			if($products_one->department_id == 7)
			{
				echo "مسبح عائلات";
			}
			
			 ?></td>
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->booking_date; ?></td>
    <td align="center" dir="rtl"  class="style435"><? echo $products_one->price; ?></td>
	    <td align="center" dir="rtl"  class="style435"><? 
		$sss =  $card_db->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->approval == "true")
	{
		echo "موافق";
	}
	
	if($products_one->approval == "false")
	{
		echo "غير موافق";
	}
	
	if($products_one->approval == "")
	{
		echo "ليس بعد";
	}
	
	 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->done == "true")
	{
		echo "حضر";
	}
	
	if($products_one->done == "false")
	{
		echo "لم حضر";
	}
	
	if($products_one->approval == "true" &&  $products_one->done == "")
	{
		echo "ليس بعد";
	}
	
	if($products_one->approval == "false" &&  $products_one->done == "")
	{
		echo "غير موافق";
	}
	
	 ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">الصالات الرياضية</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db1->getBookingByCardID($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="14%" align="center" valign="middle" class="style435">نوع الحجز</td>
		<td width="21%" align="center" valign="middle" class="style435">من الساعة </td>
		<td width="11%" align="center" valign="middle" class="style435">عدد الساعات</td>
		<td width="12%" align="center" valign="middle" class="style435">كلفة الساعة </td>
     <td width="13%" align="center" valign="middle" class="style435">اسم الزبون </td>
	    <td width="14%" align="center" valign="middle" class="style435">موافقة او لم يوافق </td>
		<td width="15%" align="center" valign="middle" class="style435">حضر او لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
  		    <td align="center" dir="rtl"  class="style435"><? 
			
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
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->start; ?></td>
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->hours; ?></td>
    <td align="center" dir="rtl"  class="style435"><? echo $products_one->price; ?></td>
	    <td align="center" dir="rtl"  class="style435"><? 
		$sss =  $card_db->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->approval == "true")
	{
		echo "موافق";
	}
	
	if($products_one->approval == "false")
	{
		echo "غير موافق";
	}
	
	if($products_one->approval == "")
	{
		echo "ليس بعد";
	}
	
	 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->done == "true")
	{
		echo "حضر";
	}
	
	if($products_one->done == "false")
	{
		echo "لم حضر";
	}
	
	if($products_one->approval == "true" &&  $products_one->done == "")
	{
		echo "ليس بعد";
	}
	
	if($products_one->approval == "false" &&  $products_one->done == "")
	{
		echo "غير موافق";
	}
	
	 ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">الفنادق</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db2->getBookingByCardID($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="18%" align="center" valign="middle" class="style435">نوع الحجز</td>
		<td width="28%" align="center" valign="middle" class="style435">التاريخ المطلوب </td>
		<td width="12%" align="center" valign="middle" class="style435">كلفة الليلة </td>
     <td width="16%" align="center" valign="middle" class="style435">اسم الزبون </td>
	    <td width="14%" align="center" valign="middle" class="style435">موافقة او لم يوافق </td>
		<td width="12%" align="center" valign="middle" class="style435">حضر او لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
  		    <td align="center" dir="rtl"  class="style435"><? 
			
			if($products_one->department_id == 14)
			{
				echo "خمسة نجوم مزوج";
			}
			if($products_one->department_id == 15)
			{
				echo "ثلاث نجوم مزوج";
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
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->booking_date; ?></td>
    <td align="center" dir="rtl"  class="style435"><? echo $products_one->price; ?></td>
	    <td align="center" dir="rtl"  class="style435"><? 
		$sss =  $card_db->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->approval == "true")
	{
		echo "موافق";
	}
	
	if($products_one->approval == "false")
	{
		echo "غير موافق";
	}
	
	if($products_one->approval == "")
	{
		echo "ليس بعد";
	}
	
	 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->done == "true")
	{
		echo "حضر";
	}
	
	if($products_one->done == "false")
	{
		echo "لم حضر";
	}
	
	if($products_one->approval == "true" &&  $products_one->done == "")
	{
		echo "ليس بعد";
	}
	
	if($products_one->approval == "false" &&  $products_one->done == "")
	{
		echo "غير موافق";
	}
	
	 ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">المطاعم</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db->getBookingByCardID2($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
  <td width="18%" align="center" valign="middle" class="style435">نوع الحجز</td>
		<td width="28%" align="center" valign="middle" class="style435">التاريخ المطلوب </td>
		<td width="12%" align="center" valign="middle" class="style435">كلفة الطاولة </td>
        <td width="16%" align="center" valign="middle" class="style435">اسم الزبون </td>
	    <td width="14%" align="center" valign="middle" class="style435">موافقة او لم يوافق </td>
		<td width="12%" align="center" valign="middle" class="style435">حضر او لم يحضر </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
  		    <td align="center" dir="rtl"  class="style435"><? 
			
			if($products_one->department_id == 8)
			{
				echo "كفتيريا";
			}
			if($products_one->department_id == 9)
			{
				echo "مطاعم";
			}
			
			 ?></td>
		    <td align="center" dir="rtl"  class="style435"><? echo $products_one->booking_date; ?></td>
    <td align="center" dir="rtl"  class="style435"><? echo $products_one->price; ?></td>
	    <td align="center" dir="rtl"  class="style435"><? 
		$sss =  $card_db->getCardByID( $products_one->card_id );
		echo $sss->customer_name;
		 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->approval == "true")
	{
		echo "موافق";
	}
	
	if($products_one->approval == "false")
	{
		echo "غير موافق";
	}
	
	if($products_one->approval == "")
	{
		echo "ليس بعد";
	}
	
	 ?></td>
	<td align="center" class="style435" ><? 
	
	if($products_one->done == "true")
	{
		echo "حضر";
	}
	
	if($products_one->done == "false")
	{
		echo "لم حضر";
	}
	
	if($products_one->approval == "true" &&  $products_one->done == "")
	{
		echo "ليس بعد";
	}
	
	if($products_one->approval == "false" &&  $products_one->done == "")
	{
		echo "غير موافق";
	}
	
	 ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد طلبات للحجز بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">المول</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435">
 <?
 
$products = $db4->getBasketDataByCardID($card_id);

 if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td width="42%" align="center" valign="middle" class="style435">التاريخ المطلوب </td>
		<td width="20%" align="center" valign="middle" class="style435">سعر البضاعة </td>
		<td width="26%" align="center" valign="middle" class="style435">اسم البضاعة </td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style435"><? 
	 if($products_one->booking_time == "0000-00-00 00:00:00")
	 {
	 	echo "لم يتم التسليم بعد";
	 }
	 else
	 {
		echo $products_one->booking_time;
	 }
	 
	  ?></td>
    <td align="center" class="style435" ><? echo $products_one->snack_price; ?></td>
	<td align="center" class="style435" ><? echo $products_one->snack_name; ?></td>
  </tr>

  <?

}

?> 
</table>
<?
}
else
{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style1"><p class="style435">لا يوجد بضائع بعد</p>
    </td>
  </tr>
</table>
	
<?
}
?>
</td>
  </tr>
</table>

<?
mysql_close();
?>
