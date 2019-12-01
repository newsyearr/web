<?php
session_start();
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
    <title>ADMIN</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Kanit&display=swap');

    body {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body style="background-color:#BFD6E2;">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#000033; color:#FFFFFF;">
            <ul class="nav justify-content-center">
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF;">REGISTER</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;">User Management</a>
                    <div class="dropdown-menu" style="color:#FFFFFF;">
                        <a href="register.php" class="dropdown-item" href="addteacher.php">Add User</a>
                        <a href="search.php" class="dropdown-item" href="changepass.php">Change Password</a>
                    </div>
                </li>
                
                </li>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-left: 1700%">
                        <a class="nav-link" style="color:white;" href="../login.php">Logout</a>
                    </li>
                </ul>
            </ul>
        </nav>
    </div>
    <div style="margin: 10% 25% 25% 25%;">
        <form action="controller/registerController.php" method="POST">
        
            <div style="background-color:#1c4767; color:#FFFFFF; padding:1rem; border-radius:20px;">
                <div class="container">
                    <div class="col-xs-4">
                    <h3 align = 'center'>REGISTERUSER</h3>
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Tel</label>
                        <input type="text" name="tel" class="form-control" placeholder="Ex.08XXXXXXXX" required>
                    </div>
                </div>
                <br>
                <button type="submit" id="submit" class="btn btn-success" style="color:#FFFFFF; margin-left:45%;">Create</button>
            </div>
        </form>
    </div>
</body>

</html>