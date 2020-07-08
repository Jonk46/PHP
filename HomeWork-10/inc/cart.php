<?php

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] =['products' => []];
    }

    if(isset($_GET['route'])) {
        if($_GET['route'] === 'detect') {
            render("cart/detect", ['cartItems' => (array)cartGetList($_SESSION['cart'], $products), 'subTotal' => 0]);
        }
        if($_GET['route'] === 'checkout') {
            render("cart/shipinfo", ['cartItems' => (array)cartGetList($_SESSION['cart'], $products), 'subTotal' => 0]);
        }
    } else {
        render('cart/products', [
            'cartProducts' => $products
        ]);
    }







