<?php
session_start();

include_once "products.php";

if ($_GET['action'] === 'add') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [
            'products' => [],
        ];
    }
 if (!in_array($_GET['products_id'], array_keys($_SESSION['cart']['products']))) {
    $_SESSION['cart']['products'][$_GET['product_id']] = 1;
 } else $_SESSION['cart']['products'][$_GET['product_id']] ++;
 header('Location: card.php?action=list');
}

if($_GET['action'] === 'list') {
    if(count($_SESSION['cart']['products']) > 0 ) {
        $cardItems = [];
        foreach($_SESSION['cart']['products'] as $product_id => $product_value) {
            $cardItems[] = (object)[
                'id' => $product_id,
                'product_value' => $product_value,
                'info' => (object)$products[$product_id]
            ];
         }       }
    }

    $_SESSION['list'] = $cardItems;
    
if (isset($_POST['btn'])) {
    foreach($_POST['qty']['qty'] as $key => $value) {
        if($_POST['qty']['qty'][$key] < 0) {
            $_POST['qty']['qty'][$key] < 1;
        }
    }
    $new_values = array_combine(
        $_POST['qty']['id'],
        $_POST['qty']['qty']
    );
    foreach($new_values as $key => $value) {
        $_SESSION['cart']['products'][$key] = $value;
    }
    header('Location: card.php?action = list');
}

if($_GET['action'] === 'remove') {
    unset($_SESSION['cart']['products'][$_GET['product_idrem']]); // глянути що тут мало бути
    header('Location: card.php?action=list');
}

if($_GET['action'] === 'remove_all') {
    ($_SESSION['cart']['products'] = [];
    header('Location: card.php?action=list');
}

include_once "card.view.php";