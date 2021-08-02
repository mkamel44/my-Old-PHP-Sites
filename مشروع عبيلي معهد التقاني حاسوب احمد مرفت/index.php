<?
include("autho_index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/vegas.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<script src="js/jquery.js"></script>

<title>مشروع عبيلي</title>
</head>
<body>
<br />
<br />
<br />
<br />
<form id="form1" name="form1" method="post" action="">	

 <?


if($Submit == "تسجيل الدخول")
{

include("database/Connection.php");

$pass = md5(preg_replace('/[^a-zA-Z0-9]/','',$pass));

$name = preg_replace('/[^a-zA-Z0-9]/','',$name);

include("database/cards/CardsDbase.php");
		
$db = new CardsDbase();
		
$card_a = new Cards();
		
$card_a->cards_name=$name;
		
$card_a->cards_pass=$pass;
		
$ss = $db->checkCards($card_a);
		
			if($ss == true)
			{
			
				$db->updateCardsLuk($card_a->cards_id,"false");
			
				$_SESSION["login"] = true;
				
				$_SESSION["login_id"] = $card_a->cards_id;
				
				$_SESSION["login_name"] = $name;
				
				$_SESSION["login_time"] =  date("Y-m-d H:i:s");
				
				
					?>
				  <script language='JavaScript' type='text/javascript'>
					window.location='desgin/cards/index.php';
				  </script>
				  <?	
			}
			else
			{
			?>
				  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
					  <td height="10" align="center" valign="middle" class="btn-danger"><h4>الرمز او كلمة المروور خطأ</h4> </td>
					</tr>
</table>
<br/>
  <?
			} 
			
	mysql_close();		
			
}
		?>
  <table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top"><img src="images/v1.jpg" width="62" height="175" border="0" /></td>
            <td align="center" valign="top"><table width="392" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="74" colspan="3" align="center"  class="btn-lg bg-danger"> للزبائن الكرام <br />
                الرجاء وضع رمز الكود الخاص بالبطاقة وكلمة المرور </td>
              </tr>
              <tr>
                <td width="56%" align="right"  class="bg-danger"><input name="name" type="text" class="form-control" id="name" style="text-align:center" placeholder="xxx-xxx-xxx-xxx" /></td>
                 <td align="right" class="btn-lg bg-danger"  >رمــز الـكـود </td>
              </tr>
              <tr>
                <td height="47" align="right"  class="bg-danger"><input name="pass" type="password" class="form-control" id="pass" style="text-align:center" placeholder="**************" /></td>
                <td align="right" class="btn-lg bg-danger"  >كلمة الـمـرور </td>
              </tr>
              <tr>
                <td colspan="3" align="center">
				<br />
				<label>
                  <input type="submit" name="Submit" value="تسجيل الدخول" class="form-control" style="width:200px" />
                  </label>                </td>
              </tr>
            </table></td>
            <td align="center" valign="top"><img src="images/v2.jpg" width="54" height="175" border="0" /></td>
          </tr>
  </table>
</form>
<br />
<br />
<br />	
<p>
<table width="26%" border="0" align="center" cellpadding="0" cellspacing="0" id="messages_luk">
  <tr>
    <td align="center" valign="middle" class="btn-danger" style="font-size:18px"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="btn-success" style="font-size:18px"></td>
  </tr>
</table>
</p>
<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top"><table width="392" height="221" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="47" colspan="3" align="center"  class="btn-lg bg-danger">لازالة القفل للبطاقة الرجاء وضع الاسم وكلمة السر </td>
            </tr>
            <tr>
              <td width="56%" align="right"  class="bg-danger"><input name="name_luk" type="text" class="form-control" id="name_luk" style="text-align:center" placeholder="xxx-xxx-xxx-xxx" /></td>
               <td align="right" class="btn-lg bg-danger"  >رمــز الـكـود </td>
            </tr>
            <tr>
              <td height="47" align="right"  class="bg-danger"><input name="pass_luk" type="password" class="form-control" id="pass_luk" style="text-align:center" placeholder="**************" /></td>
              <td align="right" class="btn-lg bg-danger"  >كلمة الـمـرور </td>
            </tr>
            <tr>
              <td colspan="3" align="center">
				<br />
				<label>
                  <input type="submit" name="Submit2" id="Submit2" value="الغاء القفل الان" class="form-control" style="width:200px" />
                </label>
			    <script type="text/javascript">
			  $("#Submit2").on('click', function (){
		  

			$("#messages_luk").load("go.php",{  pass_luk : $("#pass_luk").val() , name_luk : $("#name_luk").val()  });
						

			  
			  });
			</script>                </td>
            </tr>
          </table></td>
        </tr>
</table>

<script src="js/vegas.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>

</body>
</html>