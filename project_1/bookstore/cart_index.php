<?php

require_once 'model/cart_db.php';
require_once 'model/book_db.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {        
        $action = 'view';
    }
}

switch ($action) {
    case 'view':
        $cart = cart_get_items();
        break;
    case 'add':
        $book_id = filter_input(INPUT_GET, 'book_id', FILTER_VALIDATE_INT);
        $quantity = filter_input(INPUT_GET, 'quantity');
		
		if($quantity<1){include 'error.php'; }
		
        cart_add_item($book_id, $quantity);
        $cart = cart_get_items(); 
        break; 
    case 'update':
        $items = filter_input(INPUT_POST, 'items', FILTER_DEFAULT, 
                FILTER_REQUIRE_ARRAY);
		
        foreach ( $items as $book_id => $quantity ) {
            if ($quantity == 0) {
                cart_remove_item($book_id);
            } else {
                cart_update_item($book_id, $quantity);
            }
        }
        $cart = cart_get_items();
        break;
    default:
        echo "Unknown cart action: " ;
        break;
}
    include 'cart.php' ;
?>

