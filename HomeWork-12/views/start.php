 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorisation</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="buttons">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <button type="submit" name="action" value="register" class="btn btn-danger">Register</button>
        <button type="submit" name="action" value="login" class="btn btn-success">Login</button>
    </form>
</div>
</body>
</html>
