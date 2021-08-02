<?

extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/basket/BasketDbase.php");

$db = new BasketDbase();

$db->deleteBasket($basket_id);

$db->deleteBasketDataByBasketID($basket_id);

mysql_close();

?>