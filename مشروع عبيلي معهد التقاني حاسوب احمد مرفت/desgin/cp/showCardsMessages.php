<script type="text/javascript">
function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
</script>
<?

session_start();

extract($_REQUEST);


	include("../../database/Connection.php");
	
	include("../../database/cards/CardsDbase.php");
	
	$db = new CardsDbase();
	
	$products = $db->getCardsMessages();
	
	if(count($products) != 0)
	{
	?>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
		<?
	
		$a2 = "bg-info";
		$a3 = true;
	
	 for($a1=0;$a1<count($products);$a1++)
	 {

			if($a3)
			{
				$a2 = "label-default";
				$a3 = false;
			}
			else
			{
				$a2 = "bg-danger";
				$a3 = true;	
			}

	  $products_one = $products[$a1];
	 
		?>
	  <tr>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:80px">
		<a href="#" onclick="PopupCenter('send.php?CardID=<? echo $products_one->cards_id; ?>','ارسال الرسائل',450,300);" >الرسائل</a>		</td>
		<td align="center" valign="middle" class="btn-lg <? echo $a2; ?>" style="width:200px;font-size:20px">
		<? echo $products_one->cards_name; ?>		</td>
	  </tr>
	  <?
	
	}
	
	?> 
</table>
	<?
	}
	mysql_close();
	?>