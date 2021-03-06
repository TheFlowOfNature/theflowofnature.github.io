<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="logincomplete" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <a href="/home"><input class="form-control button" type="submit" value='Login'></a>
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="/signup">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    <style>
        html{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('../static/river.png');
        }
        <style>
        /* html{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('../static/river.png');
        } */
    </style>

        <style>
    </style>
    </style>
</body>
</html>