<?php session_start()?>
<?php //session_destroy();?>
<?php include_once 'data/products.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Cart</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Women</a>
        <a class="p-2 text-dark" href="#">Men</a>
        <a class="p-2 text-dark" href="#">Kids</a>
    </nav>
    <a class="btn btn-outline-primary" href="internal/cart.php?action=list">Cart</a>
</div>

<h1 class="display-4">Pricing</h1>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <?php foreach ($products as $product_id => $product): ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?=$product['name']?></h4>
            </div>
            <div class="card-body">
                <img src=<?=$product['img']?> alt="boots" style="object-fit: cover; width: 100%">
                <a class="btn btn-success" href="internal/cart.php?action=add&product_id=<?=$product_id?>">Add to cart</a>
            </div>
        </div>
        <?php endforeach ?>
    </div>

</div>
</body>
</html>