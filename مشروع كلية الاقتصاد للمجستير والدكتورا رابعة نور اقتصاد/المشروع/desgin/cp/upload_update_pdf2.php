<?php
extract($_REQUEST);

include("../../database/Connection.php");

include("../../database/theses/ThesesDbase.php");

unlink($path);

$db = new ThesesDbase();

$db->updatePDF( $img , $id);

mysql_close();


?>