<?php
require 'model/db.php';
function get_books_by_area($area_id) {
    global $db;
    $query = '
        SELECT *
        FROM books b
           INNER JOIN bookareas a
           ON a.areaID = b.areaID
        WHERE b.areaID = :area_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':area_id', $area_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php'; 
    }
}

function get_book($book_id) {
    global $db;
    $query = '
        SELECT *
        FROM books b
           INNER JOIN bookareas a
           ON b.areaID = a.areaID
        WHERE bookID = :book_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php'; 
    }
}


?>