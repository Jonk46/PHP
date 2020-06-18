<?php
session_start();
include_once "../data/products.php";
include_once "functions.php";
if($_GET['action'] === 'add') {
    $_SESSION['cart'] = productAdd($_SESSION['cart'], $_GET['product_id']);
    redirect('cart.php', 'list');
}

if($_GET['action'] === 'list') {
    $cartitems = cartGetList($_SESSION['cart'], $products);
    $_SESSION['list'] = $cartitems;
}

if (isset($_POST['btn'])) {
    $_SESSION['cart'] = saveChangesAndRecount($_POST['qty']['id'], $_POST['qty']['qty'], $_SESSION['cart']);
    redirect('cart.php', 'list');
}

if($_GET['action'] === 'remove') {
    $_SESSION['cart'] = productRemove($_SESSION['cart'], $_GET['product_idrem']);
    redirect('cart.php', 'list');
}

if($_GET['action'] === 'remove_all') {
    $_SESSION['cart'] = CartCleanUp($_SESSION['cart']);
    redirect('cart.php', 'list');
}

include_once "../cartview.php";