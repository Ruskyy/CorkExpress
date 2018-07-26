<!DOCTYPE html>

<?php
require_once 'functions/functions.php'
 ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormLogin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-dark">
      <div class="filter">

      </div>
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <img src="assets/img/logo2.png" height="175px" alt="">
                <h1>Login</h1>
                <hr>
            </div>
            <div class="form-group">
              <label>Utilizador</label>
              <input class="form-control" name="user" placeholder="Utilizador"type="text"></div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" name="password" placeholder="******" type="password"></div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" name="submit" type="submit">Log In</button></div>
        </form>
        <?php
          if (isset($_POST["submit"])) {
            login($_POST["user"], $_POST["password"]);
          }
         ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>