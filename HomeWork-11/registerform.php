<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registerform</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form action="includes/register.php" method="post">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" placeholder="Enter your name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your emai">
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" placeholder="Enter password">
        <label for="pass">Password confirmation:</label>
        <input type="password" id="pass" name="passconfirm" placeholder="Confirm your password">
        <button type="submit" name="submit">Submit</button>
        <p>
            Have an account? - <a href="loginform.php">login</a>!
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