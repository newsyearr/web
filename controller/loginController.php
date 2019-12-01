<?php
    session_start();
    require ('../connectDB.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM test_login WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($result);
    if($username == $rs['username'] and $password == $rs['password']){
        $_SESSION['username'] = $rs['username'];
        echo "<script>window.location = '../searchedit.php'</script>";
    }
    else if (empty($username) or empty($password)){
        echo "<script>alert('username or password is empty.');window.location = '../login.php'</script>";
    }
    else{
        echo "<script>alert('username or password is incorrect.');window.location = '../login.php'</script>";
    }
    
?>
