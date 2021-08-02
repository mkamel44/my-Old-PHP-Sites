<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<?

extract($_REQUEST);

include("database/Connection.php");


include("database/supervisor/SupervisorDbase.php");

$asc = new SupervisorDbase();


include("database/departments/DepartmentDbase.php");

$db = new DepartmentDbase();

$std = $db->geta($ids);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<?
		    $ssss = $asc->getImgs($ax);
			
			if(count($ssss) > 0)
			{
			?>
			<tr>
			  <td align="center" valign="middle">&nbsp;</td></tr>
			<tr>
			  <td align="center" valign="middle">
			 <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
			<?
					 for($a1=0;$a1<count($ssss);$a1++)
					{
					 $ssss_one = $ssss[$a1];
						?>
					  <img src="<? echo $ssss_one->name."?".date("Y-m-d H:i:s"); ?>"  height="200" style="border: 1px solid #FF0000;  border-radius: 4px; padding: 5px;" align="middle" /> 
						<?
					}
			?>
			  </marquee>
		  </td>
        </tr>
		
<tr>
<tr>
			  <td align="center" valign="middle">&nbsp;</td></tr>
				<?
			}
		?>
</table>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="28%" align="center" valign="middle" bgcolor="#70786D" class="style435" style="color:#FFFFFF"><div align="center">سعر الليلة للحجز  <? echo $std->price;  ?> </div></td>
    <td width="72%" align="right" bgcolor="#70786D" class="style435" style="color:#FFFFFF"><? echo $std->department;  ?></td>
  </tr>
  <tr>
    <td height="150" colspan="2" align="right" valign="top" class="style435"><? echo $std->information;  ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="top" class="style435">
	<table width="100%" border="0" cellspacing="5" cellpadding="5" dir="ltr">
	<?
	 for($a1=0;$a1<count($ssss);$a1++)
	 {
		
	?>
  <tr>
    <td width="49%" height="162" align="center" valign="top">
	 			<?
				  $ssss_one = $ssss[++$a1];
				  if($ssss_one != "" )
				  {
				  ?>
	<img src="<? echo $ssss_one->name."?".date("Y-m-d H:i:s"); ?>" width="250" height="150" align="middle" style="border: 1px solid #FF0000;  border-radius: 4px; padding: 5px;" />
	 			<? } ?>
	</td>
    <td width="51%" align="center" valign="middle">
	 <?
				  $ssss_one = $ssss[$a1-1];
				  if($ssss_one != "" )
				  {
				  ?>
	<img src="<? echo $ssss_one->name."?".date("Y-m-d H:i:s"); ?>" width="250" height="150" align="middle" style="border: 1px solid #FF0000;  border-radius: 4px; padding: 5px;" />
	 			<? } ?>
	</td>
  </tr>
  <?
  		}
  
  ?>
</table>

	</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#70786D" class="style435">     
	<table width="70%" border="0" align="center" cellpadding="2" cellspacing="2" dir="ltr">
  <tr>
    <td align="center" valign="middle"><span class="lolo1">
      <input name="add_new" type="submit" class="lolo2" id="add_new" value="اضغط للحجز" style="height:20px;width:80px" />
	   <script type="text/javascript">
			  $("#add_new").on('click', function (){
			  
			  		if($("#card_id").val() != "")
					{
						if($("#night_num").val() != "" && $("#booking_date").val() != "" )
						{
					
						$("#main_div").load("go2.php",{  night_num : $("#night_num").val() , booking_date : $("#booking_date").val() , card_id : $("#card_id").val() , department_id :<? echo $std->id;  ?> , price : <? echo $std->price;  ?> ,addGame_Swimming : "done"  });
					 					
						}
						else
						{
							alert(" تأكد من المدخلات ");
						}
					
					}
					else
					{
					 	alert("الرجاء تسجيل الدخول أولاً");
					}
			   
			  });
			          </script>   
    </span></td>
    <td align="center" valign="middle" class="lolo1">
	<input name="booking_date" type="text" class="lolo2" id="booking_date"  />  
		<script>
			$('#booking_date').datetimeEntry();
		</script>	</td>
    <td align="left" valign="middle" class="lolo1">تاريخ الحجز </td>
    <td align="center" valign="middle" class="lolo1"><input name="night_num" type="text" class="lolo2" id="night_num" style="width:50px;text-align:center;" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="1" maxlength="2" /></td>
    <td align="left" valign="middle" class="lolo1">عدد الليالي </td>
  </tr>
</table>    </td>
  </tr>
</table>
<?
mysql_close();
?>