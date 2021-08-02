<link href="css/style.css" rel="stylesheet" type="text/css">
<?
extract($_REQUEST);

include("database/Connection.php");

include("database/snacks/SnacksDbase.php");

$db = new SnacksDbase();

$products = $db->getSnacks($ShopID);

include("database/shops/ShopsDbase.php");

$dba = new ShopsDbase();

$shopdata = $dba->getShopByID($ShopID);

?>
<table width="100%" border="0" cellpadding="2" cellspacing="2" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                  <tr>
                    <td align="right">
					<?  echo $shopdata->shop_name; ?>					</td>
                  </tr>
                  <tr>
                    <td align="right"><?  echo $shopdata->shop_place; ?></td>
                  </tr>
              </table></td>
            </tr>
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
                  <td width="50%" align="right" valign="top">
				  <?
				  $products_one = $products[++$a1];
				  if($products_one != "" )
				  {
				  ?>
				  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                                <tr>
                                  <td align="right" valign="middle" bgcolor="#FFCC00" class="style4"><? echo $products_one->snack_name; ?></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="middle" class="style2"><? echo $products_one->snack_desc; ?></td>
                                </tr>
                            </table></td>
                            <td width="27%" align="center" valign="top"><img src="desgin/cp/<? echo $products_one->snack_pic; ?>" width="162" height="135" border="0"></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                              <tr>
                                <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" ><a href="#" key="<? echo $products_one->snack_id; ?>" key1="<? echo $products_one->snack_name; ?>"  key2="<? echo $products_one->snack_price; ?>" onclick="add_snack(this);" class="style34" style="text-decoration:none"><strong>اطلب الآن </strong></a></td>
                              </tr>
                            </table></td>
                            <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                              <tr>
                                <td align="right" class="style4" dir="rtl"><? echo $products_one->snack_price; ?> <span class="style3">ل س</span> </td>
                                <td width="25%" align="right" class="style3">السعر</td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
				  <? } ?>
				  </td>
                  <td width="50%" align="right" valign="top">
				   <?
				  $products_one = $products[($a1-1)];
				  if($products_one != "" )
				  {
				  ?>
				   <table width="100%" border="0" cellspacing="2" cellpadding="2">
                     <tr>
                       <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td width="73%" align="right" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                             <tr>
                               <td align="right" valign="middle" bgcolor="#FFCC00" class="style34"><? echo $products_one->snack_name; ?></td>
                             </tr>
                             <tr>
                               <td align="right" valign="middle" class="style2"><? echo $products_one->snack_desc; ?></td>
                             </tr>
                           </table></td>
                           <td width="27%" align="center" valign="top"><img src="desgin/cp/<? echo $products_one->snack_pic; ?>" width="162" height="135" border="0"  ></td>
                         </tr>
                         <tr>
                           <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="169" border="0" align="center" cellpadding="2" cellspacing="2">
                             <tr>
                               <td width="48%" align="center" valign="middle" bgcolor="#FF00FF" ><a href="#" key="<? echo $products_one->snack_id; ?>"  key1="<? echo $products_one->snack_name; ?>"  key2="<? echo $products_one->snack_price; ?>" onclick="add_snack(this);" class="style34" style="text-decoration:none"><strong>اطلب الآن </strong></a></td>
                             </tr>
                           </table></td>
                           <td align="right" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                             <tr>
                               <td align="right" class="style4" dir="rtl"><? echo $products_one->snack_price; ?> <span class="style3">ل س</span> </td>
                               <td width="25%" align="right" class="style3">السعر</td>
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
					<p class="style2">لا يوجد وجبات بعد</p>
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

