<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<?
extract($_REQUEST);

include("database/Connection.php");

include("database/snacks/SnacksDbase.php");

$db = new SnacksDbase();

$products = $db->getSnacks($ShopID);

?>
<table width="100%" border="0" cellpadding="1" cellspacing="1" background="images/bg-body.gif" >
            <tr>
              <td align="center" valign="middle">
			  <?
			  if(count($products) != 0)
				{

			  ?>
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <?
				for($a1=0;$a1<count($products);$a1++)
			   {
			   
			   ?>
			    <tr>
                  <td width="50%" align="right" valign="top" class="style435">
				  <?
				  $products_one = $products[++$a1];
				  if($products_one != "" )
				  {
				  ?>
				  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" dir="ltr">
                          <tr>
                            <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                                <tr>
                                  <td align="right" valign="middle" class="style435"><? echo $products_one->snack_name; ?></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" class="dropbtn"><? echo $products_one->snack_desc; ?></td>
                                </tr>
                            </table></td>
                            <td width="27%" align="center" valign="top"><img src="desgin/cp/<? echo $products_one->snack_pic."?".date("Y-m-d H:i:s"); ?>" width="162" height="135" border="0"></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                              <tr>
                                <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" ><a href="#" key="<? echo $products_one->snack_id; ?>" key1="<? echo $products_one->snack_name; ?>"  key2="<? echo $products_one->snack_price; ?>" onclick="add_snack(this);" class="style34" style="text-decoration:none"><strong>شراء</strong></a></td>
                              </tr>
                            </table></td>
                            <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                              <tr>
                                <td align="right" class="style435" dir="rtl"><? echo $products_one->snack_price; ?> <span class="style3">ل س</span> </td>
                                <td width="25%" align="right" class="style435">السعر</td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
				  <? } ?>
				  </td>
                  <td width="50%" align="right" valign="top" class="style435">
				   <?
				  $products_one = $products[($a1-1)];
				  if($products_one != "" )
				  {
				  ?>
				   <table width="100%" border="0" cellspacing="2" cellpadding="2">
                     <tr>
                       <td><table width="100%" border="0" cellspacing="0" cellpadding="0" dir="ltr">
                         <tr>
                           <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                             <tr>
                               <td align="right" valign="middle" class="style435"><? echo $products_one->snack_name; ?></td>
                             </tr>
                             <tr>
                               <td align="right" valign="middle" class="dropbtn"><? echo $products_one->snack_desc; ?></td>
                             </tr>
                           </table></td>
                           <td width="27%" align="center" valign="top"><img src="desgin/cp/<? echo $products_one->snack_pic."?".date("Y-m-d H:i:s"); ?>" width="162" height="135" border="0"  ></td>
                         </tr>
                         <tr>
                           <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                             <tr>
                               <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" ><a href="#" key="<? echo $products_one->snack_id; ?>"  key1="<? echo $products_one->snack_name; ?>"  key2="<? echo $products_one->snack_price; ?>" onclick="add_snack(this);" class="style34" style="text-decoration:none"><strong>شراء</strong></a></td>
                             </tr>
                           </table></td>
                           <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                             <tr>
                               <td align="right" class="style435" dir="rtl"><? echo $products_one->snack_price; ?> <span class="style3">ل س</span> </td>
                               <td width="25%" align="right" class="style435">السعر</td>
                             </tr>
                           </table></td>
                         </tr>
                       </table></td>
                     </tr>
                   </table>
			      <? } ?></td>
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
					<td align="center" class="style1">
					<p class="style435">لا يوجد بضائع بعد</p>
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

