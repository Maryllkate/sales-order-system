<?php

// include 'conn/conn.php';
include 'config/query-login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.jpg">

    <?php include 'include/bs.php'; ?>
    
</head>
<body>
    <div class="container"> 
        <div class="row mx-auto">
        <form action="" methods="POST">
            <h1 class="text-center mt-5">LOGIN</h1>
        <div class="card-body">
            <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control my-2" 
                placeholder="input username here" required>
            </div>

            <div class="form-group mb-3">
            <label for="username">Password</label>
            <input type="password" name="password" class="form-control my-2" 
                placeholder="input password here" required>
            </div>

            <button class="btn btn-primary mp-2 my-2" name="signin">sign in</button>

        </div>

        </form>

        </div>
    </div>
    
</body>
</html>