<?php 
require '../model/db.php'; 
$book_id= $_POST['book_id']; 

 $query = '
        SELECT *
        FROM books b
           INNER JOIN bookareas a
           ON b.areaID = a.areaID
        WHERE bookID = :book_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $book = $statement->fetch();
        $statement->closeCursor();

$name='';
$area_id='';
$price='';
$description=''; 
if($_POST['book_name']!=null)
{
 $name=$_POST['book_name'];
}else {$name=$book['bookName']; }

if($_POST['area_id']!=null)
{
 $area_id=$_POST['area_id'];
}else {$area_id=$book['areaID']; }

if($_POST['price']!=null)
{
$price=$_POST['price'];
}else {$price=$book['price']; }

if($_POST['description']!=null)
{
$description=$_POST['description'];
}else {$description=$book['description']; }

$query = '
        UPDATE books
        SET bookName = :name,
            description = :desc,
            price = :price,
            areaID = :area_id
        WHERE bookID = :book_id';
		$statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':desc', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':area_id', $area_id);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $statement->closeCursor();
include 'update_book.php'; 
?>