<?php

$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

// Create an empty cart if it doesn't exist
if (!isset($_SESSION['cart']) ) {
    $_SESSION['cart'] = array();
}

// Add an item to the cart
function cart_add_item($book_id, $quantity) {
    $_SESSION['cart'][$book_id] = round($quantity, 0);

    // Set last category added to cart
    $book = get_book($book_id);
    $_SESSION['last_area_id'] = $book['areaID'];
    $_SESSION['last_area_name'] = $book['areaName'];
}

// Update an item in the cart
function cart_update_item($book_id, $quantity) {
    if (isset($_SESSION['cart'][$book_id])) {
        $_SESSION['cart'][$book_id] = round($quantity, 0);
    }
}

// Remove an item from the cart
function cart_remove_item($book_id) {
    if (isset($_SESSION['cart'][$book_id])) {
        unset($_SESSION['cart'][$book_id]);
    }
}

// Get an array of items for the cart
function cart_get_items() {
    $items = array();
    foreach ($_SESSION['cart'] as $book_id => $quantity ) {
        // Get product data from db
        $book = get_book($book_id);
        $price = $book['price'];
        $quantity = intval($quantity);

        // Calculate items' price
        $line_price = round($price * $quantity, 2);

        // Store data in items array
        $items[$book_id]['name'] = $book['bookName'];
        $items[$book_id]['description'] = $book['description'];
        $items[$book_id]['price'] = $price;
        $items[$book_id]['quantity'] = $quantity;
        $items[$book_id]['line_price'] = $line_price;
    }
    return $items;
}

// Get the number of products in the cart
function cart_product_count() {
    return count($_SESSION['cart']);
}

// Get the number of items in the cart
function cart_item_count () {
    $count = 0;
    $cart = cart_get_items();
    foreach ($cart as $item) {
        $count += $item['quantity'];
    }
    return $count;
}

// Get the subtotal for the cart
function cart_subtotal () {
    $subtotal = 0;
    $cart = cart_get_items();
    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
    return $subtotal;
}

// Remove all items from the cart
function clear_cart() {
    $_SESSION['cart'] = array();
}


function set_last_area($area_id, $area_name) {
    $_SESSION['last_area_id'] = $area_id;
    $_SESSION['last_area_name'] = $area_name;
}


function set_last_product($book_id, $book_name) {
    $_SESSION['last_book_id'] = $book_id;
    $_SESSION['last_book_name'] = $book_name;
}


function cart_get_item_word() {
    if (cart_product_count() == 1) {
        $item_word =  'Item';
    } else {
        $item_word =  'Items';
    }
    return $item_word;
}
?>