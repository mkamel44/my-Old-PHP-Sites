<link href="css/style.css" rel="stylesheet" type="text/css">
<?

extract($_REQUEST);

include("database/Connection.php");

include("database/basket/BasketDbase.php");

$db = new BasketDbase();

$bas = new Basket();

$bas->basket_mob = $mob;

$bas->basket_addr = $adder;

$db->addBasket($bas);

$bas->basket_id = $db->getLastBasketID();

	for($a1=0;$a1<count($snack_ids);$a1++)
	{
		$snack_id = $snack_ids[$a1];


		$db->addBasketData($bas->basket_id,$snack_id);
		
	}

mysql_close();

?>
<table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#F6D8A7">
            <tr>
              <td height="37" align="right" valign="middle" bgcolor="#F6D8A7" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                  <tr>
                    <td align="right" class="style3">تم اضافة طلبكم بنجاح </td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#F6D8A7" bgcolor="#F6D8A7">
				  <tr>
					<td height="120" align="center" class="style34"><p>الرجاء ابقاء الهاتف متصلا بالشبكة لكي يتصل بك خادم التوصيل أو المشرف <br />
					  <br />
					  <a href="index.php" class="style34" >الرجاء الضغط هنا للطلب من جدد</a></p>
				    </td>
				  </tr>
				</table>
			  </td>
            </tr>
        </table>
