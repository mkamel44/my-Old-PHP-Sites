<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435">نتيجة الحجز </td>
  </tr>
  
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/game_swimming/Game_SwimmingDbase.php");

$db = new Game_SwimmingDbase();

include("database/cards/CardsDbase.php");

$card_db = new CardsDbase();

if($addGame_Swimming != "")
{
			$lolo = $card_db->getCardByID($card_id);
			
			$all  = $price * $num;
	
			if( $all <= $lolo->remaining_balance )
			{
				
				for($a1 = 1 ; $a1 <= $num ; $a1++)
				{
			
					$bas = new Game_Swimming();
					
					$bas->department_id = $department_id;
					
					$bas->card_id = $card_id;
					
					$bas->price = $price;
					
					$bas->booking_date = $booking_date;
					
					$bas->done = "";
					
					$bas->approval = "";
			
					$db->addGame_Swimming($bas);
					
				}
				
				$all_new =  $lolo->remaining_balance - $all;
	
				$card_db->updateCardRemaining_Balance($card_id,$all_new);
			?>
			<tr>
			  <td colspan="2" align="center" class="style435"><p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">&nbsp;</p>
			    <p align="center">تم اضافة الطلب بنجاح يرجى انتظار موافقة المشرف </p>
		      <p align="center">راجع صفحة الحجوزات </p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p>
		      <p align="center">&nbsp;</p></td>
  </tr>
			<?
			
			}
			else
			{
			?>
			 <tr>
			  <td colspan="2" align="center" class="style435"><div align="center">ليس لديك رصيد كافي </div></td>
			   </tr>
			<?
			}
}
mysql_close();

?>
</table>
