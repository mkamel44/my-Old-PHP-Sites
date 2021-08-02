<link href="../../css/cp.css" rel="stylesheet" type="text/css" />
<?
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/books/BooksDbase.php");

$db = new BooksDbase();

$products = $db->getBooksNotTrueEyt();

if(count($products) != 0)
{

?>

<table width="100%" border="1" bordercolor="#FF0000" id="example">
  <tr>
    <td width="76%" align="center" valign="middle" class="style1">الكتاب</td>
  </tr>
    <?

 for($a1=0;$a1<count($products);$a1++)
 {

  $products_one = $products[$a1];
 
    ?>
  <tr>
    <td align="center" dir="rtl"  class="style1"><a href="#" class="style1" onclick="PopupCenter('show.php?book_id=<? echo $products_one->id; ?>','تفاصيل الكتاب',600,300);"><? echo $products_one->address; ?></a></td>
  </tr>
  <?

}

?> 
</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="num">
  <tr>
    <td height="32" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>
<?
}
mysql_close();
?>