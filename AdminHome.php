o<?php
/*
session_start();

if(empty($_SESSION['login_user']))
    header('Location: AdminLogin.php');
*/?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Welcome to City Tiffins</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

        <style>
            body {
                background:url("http://www.shutterstock.com/blog/wp-content/uploads/2013/05/shutterstock_83564761.jpg") no-repeat center center fixed;
                background-size: cover;
                text-align: center;
            }
        </style>
    </head>
<body>
    <div id="main">
        <h1><?php echo $_POST['username']?>Welcome to City Tiffins</h1>

        <a href="#" class="btn btn-primary btn-large"><i class="icon-white icon-plus"></i>Add Tiffin Center</a>
        <br>
        <br>
        <a href="#" class="btn btn-success btn-large"><i class="icon-white icon-align-justify"></i>Show Tiffin Centers</a>
        <br><br><br>
        <a href="AdminLogout.php" class="btn btn-danger btn-small"><i class="icon-white icon-exclamation-sign"></i>Logout</a>
    </div>
</body>
</html>