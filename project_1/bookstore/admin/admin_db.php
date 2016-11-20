<?php?
require '../model/db.php'; 

function view_all_books() {
	 global $db;
    $query = '
        SELECT * 
        FROM books b 
        INNER JOIN bookareas a
        ON b.areaID = a.areaID';
		
     try {
        $statement = $db->prepare($query);
        $statement->bindValue(':book_name', $name);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../model/database_error.php'; 
    }
		
}


function get_book_by_name($name) {
    global $db;
    $query = '
        SELECT *
        FROM books b
           INNER JOIN bookareas a
           ON b.areaID = a.areaID
        WHERE bookName = :book_name';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':book_name', $name);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../model/database_error.php'; 
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
         include '../model/database_error.php'; 
    }
}

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
        include '../model/database_error.php';  
    }
}


function update_book($book_id, $name, $price, $area_id, $description) {
    global $db;
    $query = '
        UPDATE books
        SET bookName = :name,
            description = :desc,
            price = :price,
            areaID = :area_id
        WHERE bookID = :book_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':desc', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':area_id', $area_id);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
		include '../model/database_error.php'; 
    }
}

function add_book($area_id, $name, $description,
                  $price) {
    global $db;
    $query = 'INSERT INTO books
                 (areaID, bookName, description, price)
                 
              VALUES
                 (:area_id, :name, :description, :price)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':area_id', $area_id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();

        // Get the last book ID that was automatically generated
        $area_id = $db->lastInsertId();
        return $book_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
		include '../model/database_error.php'; 
    }
}


function delete_book($book_id) {
    global $db;
    $query = 'DELETE FROM books WHERE bookID = :book_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
		include '../model/database_error.php'; 
    }
}

function get_areas() {
    global $db;
    $query = 'SELECT *
              FROM bookareas
              ORDER BY areaID';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../model/database_error.php'; 
    }
}

function get_area($area_id) {
    global $db;
    $query = '
        SELECT *
        FROM bookareas
        WHERE areaID = :area_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':area_id', $area_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
         include '../model/database_error.php'; 
    }
}

>