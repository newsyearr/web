<?php
    session_start();
    require ('../connectDB.php');
    $register_number = $_POST["register_number"];
    $amount = $_POST["amount"];
    $uom = $_POST["uom"];
    $use_at = $_POST["use_at"];
    $tuk = $_POST["tuk"];
    $type_id = $_POST["type_id"];
    $system = $_POST["system"];
    $mark = $_POST["mark"]; 

    date_default_timezone_set("Asia/Bangkok");
    $date = date('h:i A d-m-Y');
    $user = $_SESSION['username'];
    $id = $_GET["id"];

    

// $script_tz = date_default_timezone_get();
// echo $script_tz;

// if (strcmp($script_tz, ini_get('date.timezone'))){
//     echo  ini_get('date.timezone'); 
//     echo 'Script timezone differs from ini-set timezone.';
// } else {
//     echo 'Script timezone and ini-set timezone match.';
// }

    // echo $date;

    $sql = "UPDATE kharuphan SET register_number = '$_POST[register_number]' , amount = '$_POST[amount]' , uom = '$_POST[uom]' , 
    use_at = '$_POST[use_at]' , tuk = '$_POST[tuk]' , type_id = '$_POST[type_id]' , system = '$_POST[system]' , mark = '$_POST[mark]' WHERE id='$_GET[id]'";
    
    $sql1 = "INSERT INTO history_kharuphan (kharuphan_id,date,user)" . " VALUES ('$id','$date','$user')";

    $result = mysqli_query($con,$sql);

    $result1 = mysqli_query($con,$sql1);
    if($sql) {
        echo "<script>alert('Update success.');window.location = '../searchedit.php'</script>";
    }

?>