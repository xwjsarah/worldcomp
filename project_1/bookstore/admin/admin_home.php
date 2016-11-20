<?php 
  require_once('../model/db.php');
  
  $area_id = filter_input(INPUT_GET, 'area_id', FILTER_VALIDATE_INT);
        if ($area_id==null) {
            $area_id = 1;
    }

   
    $query = "SELECT * FROM bookareas 
              WHERE areaID = $area_id";
    $area = $db->query($query);
    $area = $area->fetch();
    $area_name = $area['areaName'];

 
    $query = 'SELECT * FROM bookareas
              ORDER BY areaID';
    $areas = $db->query($query);


   $query = "
             SELECT *
             FROM books b
             INNER JOIN bookareas a
             ON a.areaID = b.areaID
             WHERE b.areaID = $area_id";
              
    $books = $db->query($query);
?>

<head>
    <title>Book Admin</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<main>
<h1>Books Management Application (<a href="../index.php">Go Back to Bookstore</a>)</h1>
<body>
  
 <aside>
        <!-- display a list of areas -->
        <h2>Areas</h2>
        <nav>
        <ul>
            <?php foreach ($areas as $area) : ?>
            <li><a href="admin_home.php?area_id=<?php echo $area['areaID']; ?>">
                    <?php echo $area['areaName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>

	<section>
        <!-- display a table of books -->
        <h2><?php echo $area_name; ?></h2>
        <table border="1">
            <tr>
               
                <th>Name</th>
				<th>Description</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($books as $book) : ?>
            <tr>
                <td><?php echo $book['bookName']; ?></td>
                <td><?php echo $book['description']; ?></td>
                <td class="right"><?php echo $book['price']; ?></td>
                <td><form action="delete_book.php" method="post">
                    <input type="hidden" name="book_id"
                           value="<?php echo $book['bookID']; ?>">
                    <input type="hidden" name="area_id"
                               value="<?php echo $book['areaID']; ?>" />
                    <input type="submit" name="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_book.php">Add Book</a></p>
        <p><a href="update_book.php">Update Book</a></p>
       
    </section>

</body>
</main>