<?php

session_start();

if(empty($_SESSION['login_user']))
    header('Location: AdminLogin.php');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<style>
    body {
        background:url("http://www.shutterstock.com/blog/wp-content/uploads/2013/05/shutterstock_83564761.jpg") no-repeat center center fixed;
        background-size: cover;
        text-align: center;
    }
</style>

<body>
<div id="main">
    <h1><?php echo $_POST['name'].'\'s'?>, Tiffin Center is Registered</h1>
    <div id="box">
       <br><br>
        <a href="AddTiffinCenterProcess.php" class="btn btn-primary btn-large"><i class="icon-white icon-repeat"></i>Register Another Vendor</a>
        <br><br>
        <a href="AdminLogout.php" class="btn btn-danger btn-small"><i class="icon-white icon-off"></i>Logout</a>
    </div>
    </form>
</div>

</div>
</body>


