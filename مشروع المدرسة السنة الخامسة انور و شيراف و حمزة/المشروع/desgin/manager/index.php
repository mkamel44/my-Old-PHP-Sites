<?
include("../../autho.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحة تحكم المدير</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../../datetime/jquery.plugin.js"></script>
<script src="../../datetime/jquery.datetimeentry.js"></script>

</head>
<?

include("../../database/Connection.php");

?>
<body >

<table id="maintable" width="0%" border="1" align="center" style="border-style:none;border-bottom:none;border-top:none;" cellpadding="0" cellspacing="0" bordercolor="#606060">
  <tr>
    <td><table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="90"><img src="../../images/1.jpg" width="90" height="271" border="0" /></td>
              <td width="319"><img src="../../images/2.jpg" width="319" height="271" border="0" /></td>
              <td width="368"><img src="../../images/3.jpg" width="368" height="271" /></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td rowspan="3" align="center" valign="top"  style="background-image: url('../../images/88.jpg');background-position: 50% 75%;background-repeat: no-repeat;"  ><table width="100%" height="653" border="0">
                  <tr>
                    <td align="center" valign="top"><? 
					
					if(trim($inc) == "")
					{
						$inc ="../homepage";
					}
					
					include($inc.".php");	
					
	?></td>
                  </tr>
                  </table></td>
              <td width="176" height="3" align="center" valign="top" bgcolor="#F7971F"><img src="../../images/33.jpg" width="176" height="3" border="0" /></td>
              <td width="30" rowspan="3" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top" bgcolor="#F7971F"><table id="menutable" width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة الصفوف </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addClasses" class="link" >اضافة صف جديد</a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showClasses" class="link">عرض الصفوف </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
				
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة الشعب </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addRooms" class="link" >اضافة شعبة جديدة</a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showRooms" class="link">عرض الشعب </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
					
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة الصف والشعب </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addClasses_Rooms" class="link" >اضافة صف شعبة </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showClasses_Rooms" class="link">عرض صف شعبة </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة الطلاب </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addStudents" class="link" >اضافة طالب </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showStudents" class="link">عرض الطلاب </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
					<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة الأساتذة </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addTeachars" class="link" >اضافة استاذ </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showTeachars" class="link">عرض الأساتذة </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
					<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة المواد </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=addSubjects" class="link" >اضافة مادة </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showSubjects" class="link">عرض المواد </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">ادارة المواد و الاستاذ و الصف </td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=‫addSbject_Teacher_Classes_Rooms" class="link" >اضافة مادة واستاذ وصف </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=showSbject_Teacher_Classes_Rooms" class="link">عرض مادة و استاذ وصف </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title">تعديل كلمات السر</td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=updateAdmin&id=1" class="link" >المدير </a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
                <tr>
                  <td align="center"><a href="index.php?inc=updateAdmin&id=2" class="link">مراقب الدوام</a></td>
                </tr>
				
				<tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				
				<tr>
                  <td align="center" bgcolor="#BA0D13" class="Title"><strong>كشف العلامات </strong></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
				  <tr>
                  <td align="center"><a href="index.php?inc=showAlamat" class="link">العلامات</a></td>
                </tr>
                <tr>
                  <td align="center"><img src="../../images/5.jpg" width="174" height="6" /></td>
                </tr>
               
              </table></td>
            </tr>
            <tr>
              <td height="3" align="center" valign="bottom" bgcolor="#F7971F"><img src="../../images/33.jpg" width="176" height="3" border="0" /></td>
            </tr>
			
			
            
        </table></td>
      </tr>
      <tr>
        <td height="25" align="center" bgcolor="#606060" class="Footer" >School Management جميع الحقوق محفوظة لمجموعة <img src="../../images/100.jpg" width="22" height="23" border="0" align="absmiddle" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<?
mysql_close();
?>
</body>
</html>
