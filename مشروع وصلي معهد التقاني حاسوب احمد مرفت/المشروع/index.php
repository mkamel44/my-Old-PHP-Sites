<?
session_start();

extract($_REQUEST);

if($log == "out")
{
	    $_SESSION["login"] = false;
		
		$_SESSION["login_id"] = -1;
		
		$_SESSION["login_type"] = "0";
		
		$_SESSION["login_name"] ="no name";
	
	?>
<script language='JavaScript' type='text/JavaScript'>
	window.location='../../index.php';
	</script>
<?
	exit();

}

include("database/Connection.php");

include("database/shops/ShopsDbase.php");

$db = new ShopsDbase();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: وصلي ::	.</title>
<meta charset="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<link href="css/style.css" rel="stylesheet" type="text/css">

<script>
var snack_ids = new Array();
var snack_prices = new Array();

function add_snack(tag_here)
{

		var snack_id = $(tag_here).attr("key");
						
		var snack_name = $(tag_here).attr("key1");
		
		var snack_price = $(tag_here).attr("key2");

		snack_ids.push(snack_id);
		
		snack_prices.push(snack_price);
		
		$('#basket_data').append("<tr id='tr_"+snack_id+"'><td width='18%' align='center' valign='middle' class='style3'><input name='del"+snack_id+"' key='"+snack_id+"' onclick='delete_snack(this);' type='submit'  id='del"+snack_id+"' value='حذف' /></td><td width='64%' align='center' valign='middle'class='style3'>"+snack_name+"</td></tr>");
		
		get_all_prices();
		
}

function delete_snack(tag_here)
{
	var snack_id = $(tag_here).attr("key");

	remove_at(snack_ids,snack_prices,snack_id);

	$("#tr_"+snack_id).remove();
	
	get_all_prices();

}

function remove_at(arr , arr2 , itemm) 
{
    for (var i = arr.length; i--;)
	 {
        if (arr[i] === itemm) 
		{
            arr.splice(i, 1);
			arr2.splice(i, 1);
			return; 
        }
    }
}

function get_all_prices() 
{
	var ii = 0;

    for (var i = 0 ; i < snack_prices.length ; i++)
	 {
        ii = Number(snack_prices[i]) + Number(ii);
     }
	 
	 $("#mony").val(ii);
}


</script>
</head>
<body>
<div id="background">
  <div id="page">
    <div id="header">
      <ul class="navigation">
        <li>
		<a id="aaaa3" href="#">فريق العمل </a>
		 <script type="text/javascript">
			 $("#aaaa3").click(function() {
			 	$("#main_div").load("a3.php");
			 }); 
			 </script>
		</li>
        <li>
		<a id="aaaa4" href="#">سرعة التوصيل </a>
		 <script type="text/javascript">
			 $("#aaaa4").click(function() {
			 	$("#main_div").load("a4.php");
			 }); 
			 </script>
		</li>
      </ul>
      <a id="logo" href="index.php"><img src="images/logo.jpg" alt="" width="276" height="203" border="0"></a>
      <ul id="navigation">
        <li>
		<a id="aaaa2" href="#">من نحن </a>
		 <script type="text/javascript">
			 $("#aaaa2").click(function() {
			 	$("#main_div").load("a2.php");
			 }); 
			 </script>
		</li>
        <li>
		<a id="aaaa1" href="#">الصفحة الرئيسية </a>
		 <script type="text/javascript">
			 $("#aaaa1").click(function() {
			 	$("#main_div").load("a1.php");
			 }); 
			 </script>
		</li>
      </ul>
    </div>
    <div id="body">
      <div class="slider">
        <ul>
          <li class="first">
            <table width="100%" height="331" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="36" align="center" valign="middle"><h1 class="style1"> ( ( قائمة الباسكت ) )</h1></td>
              </tr>
              <tr>
                <td align="center" valign="top" class="style2">
				
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	<div style="overflow-y: scroll; height:110px;">
	<table width="100%" border="1" cellpadding="2" cellspacing="2" bordercolor="#7A0309" id="basket_data">
                  <tr>
                    <td width="18%" align="center" valign="middle" class="style3">حذف</td>
                    <td width="64%" align="center" valign="middle" class="style3">الوجبة</td>
                  </tr>
                </table>
				</div>				</td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td align="right" valign="middle"><input name="mony" type="text" class="style3" id="mony" readonly style="width:100%;text-align:center;" onKeyUp="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" value="0" />
        </td>
        <td align="right" valign="middle">:</td>
        <td align="right" valign="middle" class="style3">كلفة الوجبات </td>
      </tr>
      <tr>
        <td width="63%" align="right" valign="middle">          <input name="mob" type="text" class="style3" id="mob" style="width:100%;text-align:center;" onKeyUp="if(( this.value * 1 ) == ( this.value * 1 )){}else{alert('الرجاء ادخال ارقام فقط');this.value='';}" maxlength="10" />        </td>
        <td width="5%" align="right" valign="middle">:</td>
        <td width="32%" align="right" valign="middle" class="style3">رقم الموبايل </td>
      </tr>
      <tr>
        <td align="right" valign="middle"><textarea name="adder" class="style3" id="adder" style="width:100%;height:50px;direction:rtl"></textarea></td>
        <td align="right" valign="middle">:</td>
        <td align="right" valign="middle" class="style3">العنوان بالتفصيل </td>
      </tr>
      <tr>
        <td colspan="3" align="center" valign="middle">          
		<input name="buy" type="submit" class="style3" id="buy" value="قم بالشراء" />       
		  <script type="text/javascript">
			  $("#buy").on('click', function (){
			  
					if($("#mob").val() != "" && $("#adder").val() != "" && $("#mony").val() != "0")
					{
					
						$("#main_div").load("go.php" ,{ mob : $("#mob").val() , adder : $("#adder").val() , snack_ids : snack_ids });
						
						$("#buy").attr("disabled", true);
					}
					else
					{
						alert("الرجاء التأكد من المدخلات");
					}
			  
			  });
			</script>	
		 </td>
        </tr>
    </table></td>
  </tr>
</table>

				</td>
              </tr>
            </table>
          </li>
          <li>  <img src="images/barbeque.jpg" width="640" height="331" alt="" > </li>
        </ul>
      </div>
	</div>
	<div id="header">
	<table width="100%" height="222" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F6D8A7">
      <tr>
        <td width="78%" height="194" align="center" valign="top" background="images/bg-body.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="80%" align="center" valign="top"><div style="width: 100%;overflow: auto;" id="main_div" >
                  <script type="text/javascript">
		$("#main_div").load("a1.php");
	 </script>
              </div></td>
            </tr>
        </table></td>
        <td width="22%" align="center" valign="top" background="images/bg-body.gif"><table width="95%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td height="33" align="center" valign="middle" class="style4" ><strong>( قائمة المحلات )</strong></td>
            </tr>
            <?

	  $products = $db->getShops();

	  if(count($products) != 0)
		{
		 for($a1=0;$a1<count($products);$a1++)
			 {
			
			  $products_one = $products[$a1];
			  
			  ?>
            <tr>
              <td align="center" valign="middle" bgcolor="#FFCC00" ><a class="style3" id="as<? echo $a1; ?>" href="#" style="text-decoration:none"> <? echo $products_one->shop_name; ?> </a>
                  <script type="text/javascript">
			 $("#as<? echo $a1; ?>").click(function() {
			 	$("#main_div").load("showSnacks.php" ,{ ShopID : <? echo $products_one->shop_id; ?>  });
			 }); 
			 </script>
              </td>
            </tr>
            <?
			 }
		}
		else
		{
		?>
            <tr>
              <td height="24" align="center" valign="middle" ><p class="style3">لا يوجد محلات</p></td>
            </tr>
            <?
		}
	
		?>
        </table></td>
      </tr>
      <tr>
        <td height="23" colspan="2" align="center" valign="top" bgcolor="#F6D8A7" class="style5">( جميع الحقوق محفوظة لموقع وصلي )</td>
      </tr>
    </table>
	</div>
  </div>
</div>
</body>
</html>
<?
	mysql_close();
?>

