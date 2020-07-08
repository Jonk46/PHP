<?php

function render($page, array $data = []) {
    $data['routePage'] = $page;
    extract($data);
    require_once __DIR__."/../views/layouts/main.view.php";
}

if(isset($_GET['action'])) {
    if($_GET['action'] === 'add') {
        $_SESSION['cart'] = productAdd($_SESSION['cart'], $_GET['product_id']);

    }
    if($_GET['action'] === 'remove') {
        $_SESSION['cart'] = productRemove($_SESSION['cart'], $_GET['product_idrem']);
    }

    if($_GET['action'] === 'remove_all') {
        $_SESSION['cart'] = CartCleanUp($_SESSION['cart']);
    }

    header("Location: {$_SERVER['PHP_SELF']}?route=detect");
}


if (isset($_POST['btn'])) {
    $_SESSION['cart'] = saveChangesAndRecount($_POST['qty']['id'], $_POST['qty']['qty'], $_SESSION['cart']);
    render("cart/detect", ['cartItems' => (array) cartGetList($_SESSION['cart'], $products), 'subTotal' => 0]);
}

if(isset($_POST['end'])) {
    $json = json_encode($_POST);
    filePut($json, "data/json.txt");
    $cartItems = [];
    $_SESSION['cart'] =[];
    header("Location: {$_SERVER['PHP_SELF']}");
}


