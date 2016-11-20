<?php
 require_once('../model/db.php');

// Get IDs
$book_id = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
$area_id = filter_input(INPUT_POST, 'area_id', FILTER_VALIDATE_INT);


if ($book_id != false && $area_id != false) {
    $query = 'DELETE FROM books
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}


include('admin_home.php');