<!doctype html>  
<head>
<meta charset="UTF-8">
<title>ระบบตรวจนับครุภัณฑ์</title>
<link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
<link rel="stylesheet" type="text/css" href="css/styles.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
    
    <script language="javascript">
function fncSubmit()
{
	if(document.form1.type.value == "")
	{
		alert('กรุณาป้อน	ประเภท');
		document.form1.type.focus();		
		return false;
	}	
	if(document.form1.detail.value == "")
	{
		alert('');
		document.form1.detail.focus();
		return false;
	}	
	document.form1.submit();
}
</script>
    


    </head>
    <body>
    <!--start container-->
    <div id="container">

    <!--start header-->

    <header>
 
    <!--start logo-->
    <a href="#" id="logo"><img src="images/logo.png" width="221" height="130" alt="logo"/></a>    

	<!--end logo-->
	
   <!--start menu-->
   <!--end menu-->
	

    <!--end header-->
	</header>


   <!--start intro-->

   <section id="intro">
   <div id="slides">
   <div class="slides_container">
   <img src="images/banner1.png" width="960" height="300" alt="baner">
   <img src="images/banner1.png" width="960" height="300" alt="baner">
   
   </div>
   </div>
 
   </section>
   <!--end intro-->
   
   
   <!--start holder-->
   <?php
$objConnect = mysql_connect("158.108.101.2","tg","123456") or die("Error Connect to Database");
$objDB = mysql_select_db("employee");
$strSQL = "SELECT * FROM kharuphan ORDER BY id desc LIMIT  1";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>



   
   <form name="form1" method="post" action="kurupan_insert_other.php" id="form1" enctype="multipart/form-data">
   <div class="holder_content1">
   
   <section class="group4">
   <table width="100%" border="0" class="form-add" >
	<tr>
		<td width="18%"><h1>ID  </h1></td>
		<td width="82%">
			<input name="id" type="text" id="id" maxlength="300">
            
            <?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
<div align="">ID ล่าสุดที่ถูกบันทึกคือ <?php echo $objResult["id"];?></div>	

<?php
}
?>
<?php
mysql_close($objConnect);
?>

        </td>
        
	</tr>
	<tr>
		<td><h1>หมายเลขครุภัณฑ์</h1></td>
		<td><input name="id2" type="text" id="id2" maxlength="300" /></td>
	</tr>
	<tr>
	  <td><h1>ชื่อครุภัณฑ์</h1></td>
	  <td><textarea name="name" cols="50" rows="3" id="name"></textarea></td>
    </tr>
	<tr>
		<td><h1>รายละเอียด (ยี่ห้อ,รุ่น)</h1></td>
		<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
	</tr>
    <tr>
		<td><h1>จำนวนนับ (อัน,เครื่อง)</h1></td>
		<td><input name="num2" type="text" id="num2" maxlength="300" /></td>
	</tr>
    <tr>
		<td><h1>จำนวน</h1></td>
		<td><input name="num" type="text" id="num" maxlength="300" /></td>
	</tr>
    
     <tr>
		<td><h1>ใช้ประจำที่</h1></td>
		<td><input name="where" type="text" id="where" maxlength="300" /></td>
	</tr>
    
    <tr>
		<td><h1>หมายเหตุ</h1></td>
		<td><input name="comment" type="text" id="comment" maxlength="300" /></td>
	</tr>
    <tr>
		<td><h1>ประเภท (ใส่ตัวเลข 4 หลัก)</h1></td>
		<td><h1><input name="type" type="text" id="type" maxlength="300" /></td>
	</tr>
	<tr>
		<td height="43"><h2><a href="SearchRecord.php" target="_blank">ค้นหาและพิมพ์ Barcode</a></h2></td>
		<td height="43">
			<input type="submit" name="submit" value="เพิ่ม" /  >    
			<input type="reset" name="submit2" value="เคลียร์" />
   		</td>
        
	</tr>
    
    
</table>
<h1>ประเภท</h1>
<table cellspacing="0" cellpadding="0" >
  <col width="144" />
  <col width="1187" />
  <tr>
    <td align="left" width="71">1040</td>
    <td align="left" width="775">กล้องเล็งและเครื่องวัดระยะ</td>
  </tr>
  <tr>
    <td align="left">2340</td>
    <td align="left">รถจักรยานยนต์ รถจักรยานยนต์ล้อเล็ก และรถจักรยาน</td>
  </tr>
  <tr>
    <td align="left">3920</td>
    <td align="left">อุปกรณ์ยกขนพัสดุไม่มีการขับเลื่อนด้วยตนเอง</td>
  </tr>
  <tr>
    <td align="left">4110</td>
    <td align="left">อุปกรณ์ตู้เย็น</td>
  </tr>
  <tr>
    <td align="left">4120</td>
    <td align="left">อุปกรณ์เครื่องปรับอากาศ</td>
  </tr>
  <tr>
    <td align="left">4140</td>
    <td align="left">พัดลม เครื่องถ่ายเทอากาศและเครื่องเป่าลม</td>
  </tr>
  <tr>
    <td align="left">4510</td>
    <td align="left">เครื่องสุขภัณฑ์และส่วนประกอบ</td>
  </tr>
  <tr>
    <td align="left">4520</td>
    <td align="left">อุปกรณ์ทำความร้อนและเครื่องทำความร้อน</td>
  </tr>
  <tr>
    <td align="left">4610</td>
    <td align="left">อุปกรณ์เครื่องกรองน้ำ</td>
  </tr>
  <tr>
    <td align="left">4620</td>
    <td align="left">อุปกรณ์เครื่องกลั่นน้ำมันสำหรับเรือและงานอุตสาหกรรม</td>
  </tr>
  <tr>
    <td align="left">5210</td>
    <td align="left">เครื่องวัดทั่วไป ครุภัณฑ์กีฬา/กายภาพ</td>
  </tr>
  <tr>
    <td align="left">5805</td>
    <td align="left">อุปกรณ์โทรศัพท์ และโทรเลข</td>
  </tr>
  <tr>
    <td align="left">6120</td>
    <td align="left">หม้อแปลงไฟฟ้า และศูนย์จ่ายไฟและโรงไฟฟ้า</td>
  </tr>
  <tr>
    <td align="left">6130</td>
    <td align="left">เครื่องเปลี่ยนกระแสไฟฟ้าชนิดไม่หมุน</td>
  </tr>
  <tr>
    <td align="left">6625</td>
    <td align="left">เครื่องมือทดสอบและเครื่องวัดคุณสมบัติทางไฟฟ้าและทางอิเลคโทรนิค</td>
  </tr>
  <tr>
    <td align="left">6630</td>
    <td align="left">เครื่องมือวิเคราะห์ทางเคมี</td>
  </tr>
  <tr>
    <td align="left">6640</td>
    <td align="left">อุปกรณ์และสิ่งของในห้องทดลอง</td>
  </tr>
  <tr>
    <td align="left">6650</td>
    <td align="left">เครื่องมือทางทัศนะ</td>
  </tr>
  <tr>
    <td align="left">6665</td>
    <td align="left">เครื่องมือตรวจค้นเกี่ยวกับอันตราย</td>
  </tr>
  <tr>
    <td align="left">6670</td>
    <td align="left">เครื่องวัดและเครื่องชั่ง</td>
  </tr>
  <tr>
    <td align="left">6685</td>
    <td align="left">เครื่องมือวัดและเครื่องควบคุมความดันอุณหภูมิ    และความชื้น</td>
  </tr>
  <tr>
    <td align="left">6695</td>
    <td align="left">เครื่องมื่ออื่นๆ</td>
  </tr>
  <tr>
    <td align="left">6710</td>
    <td align="left">กล้องฉายภาพยนตร์ (กล้องถ่ายภาพยนตร์)</td>
  </tr>
  <tr>
    <td align="left">6720</td>
    <td align="left">กล้องถ่ายภาพนิ่ง</td>
  </tr>
  <tr>
    <td align="left">6730</td>
    <td align="left">อุปกรณ์เครื่องฉายภาพ</td>
  </tr>
  <tr>
    <td align="left">6910</td>
    <td align="left">เครื่องช่วยฝึก</td>
  </tr>
  <tr>
    <td align="left">7105</td>
    <td align="left">เครื่องตกแต่งบ้าน</td>
  </tr>
  <tr>
    <td align="left">7110</td>
    <td align="left">เครื่องตกแต่งสำนักงาน</td>
  </tr>
  <tr>
    <td align="left">7125</td>
    <td align="left">ตู้ หีบ ช่องเก็บของ หิ้งเก็บของ</td>
  </tr>
  <tr>
    <td align="left">7195</td>
    <td align="left">เครื่องประดับและเครื่องตกแต่งอื่น ๆ</td>
  </tr>
  <tr>
    <td align="left">7440</td>
    <td align="left">ระบบกรรมวิธีข้อมูลอัตโนมัติสำหรับอุตสาหกรรมวิทยาศาสตร์และสำนักงาน</td>
  </tr>
  <tr>
    <td align="left">7520</td>
    <td align="left">เครื่องใช้และเครื่องประกอบสำนักงาน</td>
  </tr>
  <tr>
    <td align="left">7730</td>
    <td align="left">เครื่องเล่นแผ่นเสียง วิทยุ และโทรทัศน์ใช้ในบ้าน</td>
  </tr>
  <tr>
    <td align="left">7810</td>
    <td align="left">เครื่องเล่นเกม เครื่องเล่นและของมีล้อ</td>
  </tr>
  <tr>
    <td align="left">7830</td>
    <td align="left">อุปกรณ์สันทนาการและยิมนาสติก</td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
   <article> </article> 
   
   </section>

   </div>
   <!--end holder-->

   
   <!--start holder-->

   <div class="holder_content">

   <section class="group1">
  <a href="indexa.php"> <h1> ตรวจดูข้อมูลการตรวจสอบและนับครุภัณฑ์</h1></a>
   <img src="images/icon4.png" width="51" height="52" alt="icons" class="icons"/>
   <p>ตรวจดูข้อมูลการตรวจสอบและนับครุภัณฑ์ สามารถทำการตรวจสอบได้จากการเลือกประเภทของครุภัณฑ์และปีที่ต้องการตรวจสอบ โดยผลลัพธ์จะแสดงให้เห็นครุภัณฑ์ที่ทำการตรวจนับแล้ว หรือยังไม่ได้ตรวจนับ ตลอดจนสภาพของครุภัณฑ์ และสามารถทำการพิมพ์ภาพ QR Code ได้ที่เมนูนี้</p>
   <a href="indexa.php"><span class="button">Read more</span></a>
   </section>

   
   <section class="group2">
   <a href="indexb.php"> <h1> ออกรายงาน Excel การตรวจสอบและนับครุภัณฑ์</h1></a>
   <img src="images/icon2.png" width="51" height="52" alt="icons" class="icons"/>
   <p>ออกรายงาน Excel ูข้อมูลการตรวจสอบและนับครุภัณฑ์ สามารถทำการตรวจสอบได้จากการเลือกประเภทของครุภัณฑ์และปีที่ต้องการตรวจสอบ โดยผลลัพธ์จะแสดงให้เห็นครุภัณฑ์ที่ทำการตรวจนับแล้ว หรือยังไม่ได้ตรวจนับ ตลอดจนสภาพของครุภัณฑ์ 
   
   </p>
   <a href="indexb.php"><span class="button">Read more</span></a>
   </section>
   
   <section class="group3">
   <h1>การตรวจนับครุภัณฑ์ด้วย QR Code</h1>
   <img src="images/icon1.png" width="51" height="52" alt="icons" class="icons"/>
   <p>ผู้ตรวจสอบเพียงนำโทรศัพท์มือถือที่ติดตั้งโปรแกรมดังกล่าว มาแสกนที่ QR Code จากนั้นเลือกสถานะว่า ชำรุด หรือเสื่อมสภาพ หรือปกติ จากนั้นทำการกดบันทึกข้อมูลได้ทันที</p>
   <a href=""><span class="button">Read more</span></a>
    
   </section>

 
   </div>
   <!--end holder-->
   
   
   </div>
   <!--end container-->
   
   <!--start footer-->
   <footer>
   <div class="container">
   <section class="footer_left">
   <h3>Contact information:
   <span>คณะวิทยาศาสตร์ ศรีราชา</span>
   <span>มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตศรีราชา</span>
   </h3>
   </section> 
   
   <section class="footer_left">
   <h3>Website:
   <span>www.sci.src.ku.ac.th</span>
   <span>Facebook : </span>
   </h3>
   </section> 

   
   
  
   </div>
   </footer>
   <!--end footer-->
 <!-- Free template distributed by http://freehtml5templates.com -->  
   </body></html>
