<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginForm</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form action="includes/login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email">
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" placeholder="Enter password">
    <button type="submit" name="submit">Submit</button>
    <p>
        Don't have an account? - <a href="registerform.php">register</a>!
    </p>
    <?php if (isset($_SESSION['message'])): ?>
        <p class="msg">
            <?php echo $_SESSION['message'];
            unset($_SESSION['message']); ?>
        </p>
    <?php endif ?>
</form>
</body>
</html>