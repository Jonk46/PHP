<?php session_start();
//include_once "includes/login.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<p>Welcome,  <?= $_SESSION['nameuser'] ?> you are authorized!</p>
</body>
</html>
