<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class=<?php require '../../traitement/inc/function.php';$n=$_GET['n']; identi($n); ?>></i></div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Username" name="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><a href=""><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(71,99,244);">Log In</button></a></div>
            <a class="forgot" href="#" style="color: rgb(235,66,66);">Forgot your email or password?</a>
            <a class="forgot" href="#" style="color: rgb(9,117,225);">Inscription?</a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>