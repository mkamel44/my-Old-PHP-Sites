<link href="css/style.css" rel="stylesheet" type="text/css">
<?

include("database/Connection.php");

include("database/admin/AdminDbase.php");

$db = new AdminDbase();

$std = $db->geta(5);

mysql_close();

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-body.gif">
            <tr>
              <td height="37" align="right" valign="middle" style="font-size:24px;color:#5b2f01;"><table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#7A0309">
                  <tr>
                    <td align="right" class="style3">فريقنا</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><table width="100%" border="0" cellpadding="2" cellspacing="2">
				  <tr>
					<td height="120" align="right" valign="top" class="style34"><span class="style3"><? echo $std; ?></span>
				    </td>
				  </tr>
				</table>
			  </td>
            </tr>
</table>
