<?php
session_start();
include_once('connectDB.php');
$id = $_GET['id'];

$query = "SELECT * FROM kharuphan WHERE id=$id";
$query1 = "SELECT * FROM history_kharuphan WHERE kharuphan_id=$id ORDER BY id DESC";

$result = mysqli_query($con, $query);
$result1 = mysqli_query($con, $query1);

$user = $_SESSION['username'];

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

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body style="background-color:#BFD6E2;">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#BFD6E2; color:#000000;">
        
            <ul class="nav justify-content-center">
                <a class="navbar-brand" href="index.php" style="color:#000000;"></a>
                <h6>ผู้ใช้งาน :</h6> 
                <h6><b><?php echo $user;?></b></h6>
                
        
            
                
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-left: 1975%">
                        <a class="nav-link" style="color:#000000;" href="../login.php">Logout</a>
                    </li>
                </ul>
            </ul>
        </nav>
    </div>

    <div style="width:100%;">
        <form action="controller/editController.php?id=<?php echo $id ?>" method="POST">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="95">
                        <p align="center"">ลำดับ</div>
                        </th>
                        <th width="98">
                        <p align="center"">หมายเลขครุภัณฑ์ </div>
                        </th>
                        <th width="198">
                        <p align="center">ชื่อครุภัณฑ์</div>
                        </th>
                        <th width="97">
                        <p align="center">ยี่ห้อ,รุ่น</div>
                        </th>
                        <th width="59">
                        <p align="center">จำนวน</div>
                        </th>
                        </th>

                        <th width="59">
                        <p align="center">หน่วย</div>
                        </th>

                        <th width="59">
                        <p align="center">ใช้ประจำที่</div>
                        </th>
                        <th width="59">
                        <p align="center">ตึก</div>
                        </th>
                        <th width="59">
                        <p align="center">ประเภท</div>
                        </th>
                        <th width="59">
                        <p align="center">ระบบ</div>
                        </th>
                        <th width="59">
                        <p align="center">หมายเหตุ</div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><p align="center"><?php echo $rows['id']; ?></td>
                            <td><p align="center"><?php echo $rows['kharuphan_id']; ?></td>
                            <td><p align="center"><?php echo $rows['kharuphan_name'];?></td>
                            <td><p align="center"><input type="text"style="width:300px" class="form-control" name="register_number" value="<?php echo $rows['register_number']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:45px;"class="form-control" name="amount" value="<?php echo $rows['amount']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:70px;"class="form-control" name="uom" value="<?php echo $rows['uom']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:80px;"class="form-control" name="use_at" value="<?php echo $rows['use_at']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:50px;"class="form-control" name="tuk" value="<?php echo $rows['tuk']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:80px;"class="form-control" name="type_id" value="<?php echo $rows['type_id']; ?>"></td>
                            <td><p align="center"><input type="text" style="width:70px;"class="form-control" name="system"></td>
                            <td><p align="center"><input type="text" style="width:200px;"class="form-control" name="mark"></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <button
             type="submit" id="submit" class="btn btn-success" style="margin-left:45%;">บันทึก</button>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <br>
            <br>
            <br>
            <br>
            <br>
        <tr>
                <th scope="col">ชื่อผู้ตรวจ</th>
                <th scope="col">เวลาตรวจ</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($rows1 = mysqli_fetch_assoc($result1)) {
                ?>
                <tr>
                    <td><?php echo $rows1['user']; ?></td>
                    <td><?php echo $rows1['date']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>