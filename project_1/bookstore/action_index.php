<?php

require_once('model/area_db.php');
require_once('model/book_db.php');


$area_id = filter_input(INPUT_GET, 'area_id', FILTER_VALIDATE_INT);
$book_id = filter_input(INPUT_GET, 'book_id', FILTER_VALIDATE_INT);

if ($area_id !== null) {
    $action = 'area';
} elseif ($book_id !== null) {
    $action = 'book';
} else {
    $action = '';
}

switch ($action) {
    // Display the specified category
    case 'area':
        // Get category data
        $area = get_area($area_id);
        $area_name = $area['areaName'];
        $books = get_books_by_area($area_id);

        // Display category
        include('area_view.php'); 
        break;
    // Display the specified product
    case 'book':
        // Get product data
        $book = get_book($book_id);

        // Display product
        include('book_view.php');
        break;
    default:
        $error = 'Unknown catalog action: ' . $action;
        echo $error;
        break;
}
?>