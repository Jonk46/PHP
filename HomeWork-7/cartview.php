<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Pricing example · Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
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
    <a class="btn btn-outline-primary" href="card.php?action=list">Cart</a>
</div>
<div class="container">
    <?php
    if(count($_SESSION['list']) > 0): ?>
        <form action="card.php" method="post">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($_SESSION['list'] as $item): ?>
                    <tr>
                        <th scope="row"><?= $item->id ?></th>
                        <td><img width="50px" src="<?= $item->info->img ?>"></td>
                        <td><?= $item->info->name ?></td>
                        <td><?= $item->info->price ?></td>
                        <td>
                            <input type="hidden" name="qty[id][]" value="<?= $item->id ?>">
                            <input type="number" name="qty[qty][]" value="<?= $item->product_value ?>" step="1">
                            <span><?php if(isset($_POST["qty[qty][]"])) echo $_SESSION['message'] ?></span>
                        </td>
                        <td><?= $item->product_value*$item->info->price ?></td>
                        <td>
                            <a href="card.php?action=remove&product_idrem=<?=$item->id?>">Remove</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                 <tr>
                     <th scope="row"></th>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td style="text-align: right" >Subtotal: </td>
                     <td><?php
                         $total_summ = 0;
                         for ($i=0; $i<count($_SESSION['list']); $i++) {
                             $summ = $_SESSION['list'][$i]->product_value*$_SESSION['list'][$i]->info->price;
                             $total_summ += $summ;
                         }
                         echo $total_summ;
                         ?></td>
                     <td></td>
                 </tr>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-primary">Continue Shoping</a>
            <a href="card.php?action=remove_all" class="btn btn-danger">Clean up</a>
            <input type="submit" class="btn btn-success" name="btn" value="Save Changes">
            <a href="shipInfo.php" class="btn btn-secondary">Checkout</a>
        </form>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            Your shoping cart is empty
        </div>
    <?php endif ?>

</div>