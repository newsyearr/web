
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php    

ini_set('max_execution_time', 600);
    
	$typr = $_POST['type'];
	$yyyy = $_POST['y'];

$host="158.108.101.2";
$user="tg";
$pw="123456";
$dbname="employee";
$c = mysql_connect($host,$user,$pw);
mysql_query("SET NAMES UTF8");; 
$select=mysql_select_db($db_name);
if (!$c) {
	echo "<h6>ERROR : ไม่สามารถติดต่อฐานข้อมูลได้</h6>";
	exit();
}
 
  
  
  								
					
					
					$sql = "select * from type where type_id = 8400";
					$dbquery = mysql_db_query($dbname, $sql);
					$num_rows = mysql_num_rows($dbquery);
					mysql_query("SET NAMES UTF8");
	
					$result = mysql_fetch_array($dbquery);
										$nn = $result["type_name"];
	
	
	
	
	
	
	
	
    echo "<h1>ข้อมูลครุภัณฑ์ที่ตรวจนับแล้ว";
    
  
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
   
    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";    
    
   
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    $errorCorrectionLevel = 'L';
    

    $matrixPointSize = 4;
 
?>

       
       <table width="100%" border="1" align="center">
  <tr>
  <td width="218"align="center">ลำดับที่</td>
    <td width="218"align="center">หมายเลขครุภัณฑ์</td>
    <td width="280"align="center">ชื่อครุภัณฑ์</td>
    
    <td width="280"align="center">ยี่ห้อ,รุ่น</td>
    <td width="280"align="center">หน่วยนับ</td>
    <td width="280"align="center">จำนวนตามบัญชี</td>
     <td width="280"align="center">จำนวนที่ตรวจนับได้</td>
    <td width="280"align="center">สภาพ</td>
    <td width="280"align="center">อาคาร</td>
    <td width="280"align="center">ใช้ประจำที่</td>
    <td width="280"align="center">หมายเหตุ</td>
    <td width="495"align="center">QR</td>
  </tr>
 <?php
$host="158.108.101.2";
$user="tg";
$pw="123456";
$dbname="employee";
$c = mysql_connect($host,$user,$pw);
mysql_query("SET NAMES UTF8");; 
$select=mysql_select_db($db_name);
if (!$c) {
	echo "<h3>ERROR : ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
	exit();
}
?>
  <?  
  
  
  								
					
					
					$sql = "select kharuphan.id,kharuphan_id,kharuphan_name,register_number,uom,kharuphan.mark,tuk,amount,ifnull(num,0) cc,ifnull(status,'ยังไม่ตรวจ') sapap,use_at,remark
from kharuphan left join result
on kharuphan.id = id_kurupan
where (result.status = 'normal') order by id ASC";
					$dbquery = mysql_db_query($dbname, $sql);
					$num_rows = mysql_num_rows($dbquery);
					mysql_query("SET NAMES UTF8");
							
									$i=0;
									while ($i < $num_rows)
									{
										$result = mysql_fetch_array($dbquery);
										$id = $result["id"];
										$kharuphan_id = $result["kharuphan_id"];
										$kharuphan_name = $result["kharuphan_name"];
										$register_number = $result["register_number"];
										$uom = $result["uom"];
										$use_at = $result["use_at"];
										$amount = $result["amount"];
										$type_id = $result["type_id"];
										$sapap = $result["sapap"];
										$cc = $result["cc"];
										$mark = $result["mark"];
										$tuk = $result["tuk"];
									

								
								
			?>					
								
								 
  <tr>
    <td align="center"><? echo $id; ?></td>
    <td align="center"><? echo $kharuphan_id ?></td>
    <td align="center"><? echo $kharuphan_name; ?></td>
    
    <td align="center"><? echo $register_number; ?></td>
    <td align="center"><? echo $uom ;?></td>
    <td align="center"><?  echo $amount; ?></td>
     <td  align="center"width="280"><? echo $cc ?></td>
    <td  align="center"width="280"><? 
	
	if($sapap=="Need Repair"){
		echo "ชำรุด";
	}
	else if($sapap=="Deterioration"){
		echo "เสื่อมสภาพ";
	}
	else if($sapap=="Normal"){
		echo "ปกติ";
	}
	else{
	
	echo $sapap;
	}
	
	?></td>
    <td  align="center"width="280"><? echo $tuk ; ?></td>
    <td  align="center"width="280"><? echo $use_at ; ?></td>
    <td  align="center"width="280"><? echo $mark ; ?></td>
								
					<td  align="center"><?  
	$qr = $id;
  
        QRcode::png("".$qr, "temp/".$qr.".png", "L", 4, 4);
		?>
        <img src="<? echo 'temp/'.$qr.'.png' ?>" width="132" height="132" />
<?     
	echo "<br/>".$kharuphan_id;
	
	   ?></td>
  </tr>
		
								
						<?		
								
								$i++;

								}
								mysql_close();
  
  
  
  
 ?>
  
</table>
       <p>&nbsp;</p>
       <p><a href="indexa.php">Back</a></p> 	

    
            
       
      
        
    
  

   
   

    