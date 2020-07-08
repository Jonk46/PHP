<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cart</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<?php include_once __DIR__."/../cart/header.view.php"?>
<div class="container">
<?php include_once __DIR__."/../{$routePage}.view.php"?>
</div>
<?php include_once __DIR__."/../cart/footer.view.php"?>
</body>
</html>