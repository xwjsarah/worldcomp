<?php
require 'model/db.php';
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
        include 'database_error.php';
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
         include 'database_error.php';
    }
}
?>