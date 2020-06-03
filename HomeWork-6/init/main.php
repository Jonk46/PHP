<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center pt-5">
        <h1>Don't have an account ?</h1>
        <a class="btn btn-primary" href="<?= $_SERVER['PHP_SELF'] ?>?action=register">Registration</a>
        <h1>If you're our user, please -></h1>
        <a class="btn btn-success" href="<?= $_SERVER['PHP_SELF'] ?>?action=login">Sign in</a>
    </div>
</body>

</html>