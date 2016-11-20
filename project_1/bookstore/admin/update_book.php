<?php 
require '../model/db.php'; 

 $query = '
        SELECT * 
        FROM books b 
        INNER JOIN bookareas a
        ON b.areaID = a.areaID';
 $all_books = $db->query($query);
?>


<head>
    <title>Book Admin</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>


<main>
<p><h1>Books Management Application</h1></p>
<p><h1>Update Book</h1></p>

<table border="1">
<tr><th>Book ID</th> 
    <th>Book Name</th>
	<th>Area ID</th>
	<th>Area</th>
    <th>Price</th>

</tr>
<?php foreach ($all_books as $book) : ?>
<tr>
<td><?php echo $book['bookID']; ?></td>
<td><?php echo $book['bookName']; ?></td>
<td><?php echo $book['areaID']; ?></td>
<td><?php echo $book['areaName']; ?></td>
<td><?php echo $book['price']; ?></td>    
</tr>
<?php endforeach; ?>

</table>

<p>
<form method="Post" action="update_index.php">
<label>Book ID: </label><input type="text" name="book_id" required/>
<label>Book Name: </label><input type="text" name="book_name">
<label>Area ID: </label><input type="text" name="area_id">
<label>Price: </label><input type="text" name="price">
<p><label>Description: </label><textarea rows="10" cols="100"  name="description"/></textarea></p>
<p><input type="submit" name="submit" value="Update"></p>
</form>
</p>
<p><a href="admin_home.php">Home</a></p>
<p><a href="add_book.php">Add Book</a></p>

</main>