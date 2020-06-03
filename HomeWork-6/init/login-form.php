<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="col-12 d-flex justify-content-center pt-5">
        <form action="../login.php" method="post" enctype="application/x-www-form-urlencoded">
            <h2>Login</h2>
            <p>Put your credentials to login</p>
            <!-- Email -->
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" placeholder="Put your email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <!-- Password -->
            <label for="password" class="mt-3">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="<?= (isset($_SESSION['pass'])) ? $_SESSION['pass'] : '' ?>" placeholder="Put your password">
            <!-- Submit -->
            <input type="submit" name="btn" class="btn btn-primary mt-3" value="Submit">
            <div class="pt-3 text-danger"><?= (isset($_SESSION['errMsg'])) ? $_SESSION['errMsg'] : '' ?></div>
        </form>

    </div>
</body>

</html>