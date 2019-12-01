<?php
session_start();
$user = $_SESSION['username'];

$num_per_page=100;
if(isset($_POST['data'])){
    $data = $_POST['data'];
    $query = "SELECT * FROM kharuphan WHERE CONCAT(id,kharuphan_id,use_at,kharuphan_name,register_number,amount,remark,type_id,mark,tuk,system) LIKE '%".$data."%'";
    $result = filterTable($query);
}
else{
    $query = "SELECT * FROM kharuphan";
    $result = filterTable($query);
}
function filterTable ($query){
    require ('connectDB.php');
    $result = mysqli_query($con,$query);
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SearchEdit</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=PT+Sans&display=swap');
body {
    font-family: 'PT Sans', sans-serif;
}
</style>
<body style="background-color:#BFD6E2;">
<div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#BFD6E2; color:#000000;">
    
        <ul class="nav justify-content-center">
            <a class="navbar-brand" href="index.php" style="color:#000000;"></a>
            <h6>ผู้ใช้งาน :</h6> 
            <h6><b><?php echo $user;?></b></h6>
            <br>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-left: 2000%">
                    <a class="nav-link" style="color:#000000;" href="../login.php">Logout</a>
                </li>
            </ul>
        </ul>
    </nav>
</div>

<div style="margin: 2% 37% 2% 37%;">
        <form action="searchedit.php" method="POST">
        <div style="background-color:#1c4767; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <div class="col-xs-3">
            <h3 align = 'center'>SEARCH</h3>
                <label  for="exampleInputEmail1"></label>
                <input name="data" type="text" class="form-control">
            </div>
            <br>
            <button name="search" type="submit" class="btn btn-success" style="color:#FFFFFF; margin-left:40%;">ค้นหา</button>
        </div>
        </form>
    </div>
    <br>
    <table class="table table-sm table-hover" align="center">
            <thead>
                <tr>
                <th width="91"> <div align="center">ลำดับ</div></th>
                <th width="98"> <div align="center">หมายเลขครุภัณฑ์ </div></th>
                <th width="198"> <div align="center">ชื่อครุภัณฑ์</div></th>
                <th width="71"> <div align="center">ระบบ</div></th>
                <th width="97"> <div align="center">ยี่ห้อ,รุ่น</div></th>
                <th width="59"> <div align="center">จำนวน</div></th>
                <th width="59"> <div align="center">หน่วย</div></th>
                <th width="59"> <div align="center">ใช้ประจำที่</div></th>
                <th width="59"> <div align="center">ตึก</div></th>
                <th width="70"> <div align="center">สถานะ</div></th>
                <th width="71"> <div align="center">QR</div></th>
                <th width="71"> <div align="center">ผู้ตรวจ</div></th>
                <th width="71"> <div align="center">วันที่</div></th>
                <th width="71"> <div align="center">แก้ไข</div></th>
                </tr>
            </thead>
                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><p align="center"><?php echo $rows['id']; ?></td>
                    <td><p align="center"><?php echo $rows['kharuphan_id']; ?></td>
                    <td><p align="center"><?php echo $rows['kharuphan_name']; ?></td>
                    <td><p align="center"><?php echo $rows['system']; ?></td>
                    <td><p align="center"><?php echo $rows['register_number']; ?></td>
                    <td><p align="center"><?php echo $rows['uom']; ?></td>
                    <td><p align="center"><?php echo $rows['amount']; ?></td>
                    <td><p align="center"><?php echo $rows['use_at']; ?></td>
                    <td><p align="center"><?php echo $rows['tuk']; ?></td>
                    <td><p align="center"><?php echo $rows['status']; ?></td>
                    <td><p align="center"><?php echo $rows['id']; ?></td>
                    <td><p align="center"><?php echo $rows['user']; ?></td>
                    <td><p align="center"><?php echo $rows['id']; ?></td>                   
                    <td><a href="edit.php?id=<?php echo $rows['id']; ?>">Edit</a></td>
                </tr>
                <?php
                    }
                    ?>
                </tbody>
            </table>
        </tbody>
    </table>
    
</body>
</html>