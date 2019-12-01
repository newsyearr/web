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
    <title>LOGIN</title>
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
            <a class="navbar-brand" href="login.php" style="color:#FFFFFF;"></a>
            </ul>
        </nav>
    </div>
    <div style="margin: 10% 25% 25% 25%;">
        <form action="controller/loginController.php" method="POST">
        <div style="background-color:#1c4767; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <div class="col-xs-3">
            <h3 align = 'center'>LOGIN</h3>
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="textHelp" placeholder="Enter username" requires>
            </div>
            <br>
            <div class="col-xs-3" >
                <label for="exampleInputPassword1">Password</label>
                <input name= "password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" requires>
            </div>
            <br>
            

            <button type="submit" id="submit" class="btn btn-success" style="color:#FFFFFF; margin-left:37.5%;">Login</button>
            <a href="#" class="btn btn-danger">Logout</a>
            
	
        </div>
        </form>
    </div>
</body>

</html>