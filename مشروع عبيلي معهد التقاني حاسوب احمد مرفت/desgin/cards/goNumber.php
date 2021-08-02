<?

session_start();

extract($_REQUEST);


	if($_SESSION["login_id"] == $phones_card_id)
	{

	include("../../database/Connection.php");
	
	include("../../database/phones/PhonesDbase.php");
	
	$db = new PhonesDbase();
	
	$std = new Phones();

	$std->phones_card_id = $phones_card_id;
	
	$std->phones_number = $phones_number;
	
	$std->phones_units = $phones_units;
	
	$std->phones_price = $phones_price;

	$std->phones_date_of_req = $phones_date_of_req;

	$db->addPhone($std);
	
	
	mysql_close();

	?>
<tr>
<td align="center" valign="middle" class="btn-success" style="font-size:18px">
تم الارسال بنجاح</td>
</tr>
	<?
	
	}
	else
	{
	?>
<tr>
<td align="center" valign="middle" class="btn-danger" style="font-size:18px">
لم يتم ارسال الطلب الرجاء اعادة تسجيل الدخول</td>
</tr>
	<?
	}

		

	

?>
