<?php

session_start();

if(!empty($_SESSION['login_user']))
    header('Location: AdminHome.php');
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />

<title>Admin Login</title>

<link rel="stylesheet" href="css/styleAdminLogin.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
	<script>
			$(document).ready(function() {
			
			$('#login').click(function() {

                var username=$("#username").val();
                var password=$("#password").val();
                var dataString = 'username='+username+'&password='+password;

			if($.trim(username).length>0 && $.trim(password).length>0) {

                $.ajax({
                    type: "POST",
                    url: "AdminLoginProcess.php",
                    data: dataString,
                    cache: false,
                    beforeSend: function(){ $("#login").val('Connecting...');},
                    success: function(data) {
                        if(data == 2) {
                            $("body").load("AdminHome.php").hide().fadeIn(1500).delay(6000);
                        }
                        else if(data == 0) {
                         $('#box').shake();
                         $("#login").val('Login')
                         $("#error").html("<span style='color:#cc0000'>Error:</span>Username Does Not Exist ");
                        }
                        else {
                            $('#box').shake();
                            $("#login").val('Login')
                            $("#error").html("<span style='color:#cc0000'>Error:</span>Username and Password Does Not Match");
                        }
                    }
                });
		    }

                return false;
			});

			});
		</script>
</head>
<body>
    <div id="main">
        <h1>City Tiffins Admin Login</h1>
        <div id="box">
            <form action="" method="post">
                <label>Username</label>
                <input type="text" name="username" class="input" autocomplete="off" id="username"/>
                <label>Password </label>
                <input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
                <input type="submit" class="button button-primary" value="Log In" id="login"/>
                    <span class='msg'></span>

                <div id="error"></div>
         </div>
            </form>
</div>

</div>
</body>
</html>