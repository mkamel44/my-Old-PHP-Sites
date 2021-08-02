<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

include("../../database/teachars/TeacharsDbase.php");

$db = new TeacharsDbase();

$db->deleteTeachar($id);

?>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="Msg">تم الحذف بنجاح </td>
  </tr>
</table>
