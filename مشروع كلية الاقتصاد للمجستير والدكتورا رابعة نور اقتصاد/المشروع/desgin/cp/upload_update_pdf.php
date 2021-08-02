<?php
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/messages/MessagesDbase.php");

unlink($path);

$db = new MessagesDbase();

$db->updatePDF( $img , $id);

mysql_close();


?>