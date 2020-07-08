<?php
function productAdd($cart, $id) {
//    $cart = cartInit($cart);
    $cart = productGetState($id, $cart);
    return $cart;
}

function productGetState($id, $cart) {
    if (!in_array($id, array_keys($cart['products']))) {
        $cart['products'][$id] = 1;
    } else $cart['products'][$id]++;
    return $cart;
}

function cartGetList($cart, $products) {
    if (count($cart['products']) > 0) {
        $cartitems = [];
        foreach ($cart['products'] as $product_id => $product_value) {
            $cartitems[] = (object)[
                'id' => $product_id,
                'product_value' => $product_value,
                'info' => (object)$products[$product_id]
            ];
        }
        return $cartitems;
    }
}

function saveChangesAndRecount($postId, $postQty, $cart) {
    $postQty = checkProductValue($postQty);
    $new_values = array_combine($postId, $postQty);
    foreach ($new_values as $key => $value) {
        $cart['products'][$key] = $value;
    }
    return $cart;
}

function checkProductValue($productValue) {
    foreach ($productValue as $key => $value) {
        if($productValue[$key] < 0) {
            $productValue[$key] = 1;
        }
    }
    return $productValue;
}

function productRemove($cart, $removeId) {
    unset($cart['products'][$removeId]);
    return $cart;
}

function CartCleanUp($cart) {
    $cart['products'] = [];
    return $cart;
}

function filePut($string, $path) {
    file_put_contents($path, $string,FILE_APPEND);
}