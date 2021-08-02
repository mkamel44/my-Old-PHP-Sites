<?
extract($_REQUEST);

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

<title>ارسال نص</title>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" align="center" valign="bottom"><table width="434" border="0" align="center" cellpadding="0" cellspacing="0"  >
      <tr>
        <td colspan="3" align="center"  class="btn-info btn-lg">الرجاء الرد على الاستفسارات بأسرع وقت </td>
      </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="bg-danger">
		 <textarea name="text2"  id="text2"  class="form-control " style="text-align:right;font-size:21px;height:190px;direction:rtl" readonly="readonly" placeholder="هنا تظهر الرسائل"></textarea>
		 
		  <script type="text/javascript">
					 setInterval(
								function ()
								{
									 $.ajax({
									 url: "getMsg.php", 
									 data: { 
										CardID : <?  echo $CardID; ?>
										   },
											 success: function(result)
											 {
						
												$("#text2").val(result);
												
											 }
										  });
								}
								,5000
							    );
			</script>
		</td>
        </tr>

      <tr>
	   <td width="12%" align="right" class="bg-danger">
	    <label>
		<input type="button"  name="restMSG" id="restMSG"  value="افراغ" style="width:50px" class="form-control" />
		</label>
		 <script type="text/javascript">
			  $("#restMSG").on('click', function (){
			
					 $.ajax({
									 url: "restMSG.php", 
									 data: { 
										CardID : <?  echo $CardID; ?> 
										   },
											 success: function(result)
											 {
												$("#text1").val("");
											 }
						});
			  
			  });
			</script>			    
		</td>
        <td width="12%" align="right" class="bg-danger">
		 <label>
		<input type="button"  name="send" id="send"  value="ارسال" style="width:50px" class="form-control" />
		</label>
		  <script type="text/javascript">
			  $("#send").on('click', function (){
			
					if($("#text1").val() != "")
					{
						 $.ajax({
									 url: "setMsg.php", 
									 data: { 
										CardID : <?  echo $CardID; ?> ,
										msg : $("#text1").val()
										   },
											 success: function(result)
											 {
												$("#text1").val("");
											 }
							});
					}
			  
			  });
			</script>
		</td>
        <td width="88%" align="right" class="btn-lg bg-danger">   <input name="text1" type="text"  placeholder="ارسل نص للاستفسار عن اي شيء تريده" class="form-control " id="text1" style="text-align:right;font-size:21px"  />        </td>
      </tr>

    </table></td>
    
  </tr>
</table>
<script src="js/vegas.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>

</body>
</html>