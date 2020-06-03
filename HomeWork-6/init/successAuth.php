<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="col-12 d-flex justify-content-center pt-5">
        <div>
            <h1>You are successfully logged in!</h1>
            <form action="../success.php" method="post" enctype="application/x-www-form-urlencoded" class="text-center pt-3">
                <!-- Submit -->
                <button type="submit" name="btn-logOut" class="btn btn-warning" value="Log out">Log out</button>
            </form>
        </div>
    </div>
</body>

</html>