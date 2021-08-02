<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/supervisor/SupervisorDbase.php");

$asc = new SupervisorDbase();

$aaaa = $asc->getSupervisor("9");
?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="72%" align="right" bgcolor="#70786D" class="style435" style="color:#FFFFFF">المول</td>
  </tr>
			<tr>
			  <td colspan="2" align="right" valign="top" class="style435"><table width="100%" cellspacing="0" cellpadding="0" dir="ltr">
                <tr>
                  <td width="73%" align="center" valign="top">
				  <div style="width: 100%;overflow: auto;" id="mall_div" >
                  <script type="text/javascript">
						$("#mall_div").load("showSnacks.php",{  ShopID : <? echo $ShopID; ?>  });
					 </script>
              </div>
			  </td>
                  <td width="27%" align="center" valign="top"><table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><div style="overflow-y: scroll; height:300px;">
                          <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#7A0309" id="basket_data">
                            <tr>
                              <td width="18%" align="center" valign="middle" class="style435"><div align="center">حذف</div></td>
                              <td width="64%" align="center" valign="middle" class="style435"><div align="center">البضاعة</div></td>
                            </tr>
                        </table>
                      </div></td>
                    </tr>
                    <tr>
                      <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr>
                            <td width="63%" align="right" valign="middle" class="lolo1"><input name="mony" type="text" class="style3" id="mony" readonly="readonly" style="width:100%;text-align:center;" onkeyup="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="0" />                            </td>
                            <td width="5%" align="right" valign="middle" class="lolo1">:</td>
                            <td width="32%" align="right" valign="middle" class="lolo1">كلفة البضائع </td>
                          </tr>

                          <tr>
                            <td colspan="3" align="center" valign="middle" class="lolo1">
				<input name="buy" type="submit" class="lolo2" id="buy" value="تأكيد الشراء" /> 
                <script type="text/javascript">
			  $("#buy").on('click', function (){
			  
			  if($("#card_id").val() != "")
			  {
			  
					if( $("#mony").val() != "0")
					{
						$all_mony_have = $("#remaining_balance_data").html();
			
						$my_mony = $("#mony").val();
				
						if($my_mony <= $all_mony_have)
						{
						
							$("#main_div").load("go4.php" , { card_id : $("#card_id").val() , mony : $("#mony").val() , snack_ids : snack_ids } );
							
							$("#buy").attr("disabled", true);
						
						}
						else
						{
							
							alert("ليس لديك رصيد كافي ");
						
						}
					}
					else
					{
						alert("الرجاء التأكد من المدخلات");
					}
					
			}
			else
			{
					alert("الرجاء تسجيل الدخول أولاً");
			}
			  
			  });
			        </script>  
						    </td>
                          </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
  </tr>
			<?
mysql_close();
?>
  
</table>
