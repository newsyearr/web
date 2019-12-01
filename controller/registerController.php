<?php
    require ('../connectDB.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $tel = $_POST['tel'];
    $sql = "INSERT INTO test_login (username,password,first_name,last_name,tel)" . " VALUES ('$username','$password','$first_name','$last_name','$tel')";
    $query = mysqli_query($con,$sql);
?>





