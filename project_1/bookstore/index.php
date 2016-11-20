<?php
require_once 'model/book_db.php';
include 'header.php'; 
include 'sidebar.php'; 

$book_ids= array(1, 2, 3, 4); 
$books= array(); 
foreach ($book_ids as $book_id) {
    $book = get_book($book_id);
    $books[] = $book;   
}

 
?>

<main class="nofloat">
    <h1>The Influential books</h1>
    <p>There are huge amount of books for you to choose, covering Artificial Intelligent, Parallel processing,
	   Cloud computing, Computer Visualization, Human Computer Interface and more! Check it out now! 
    </p> 
	<table>
	
    <?php foreach ($books as $book) :
        $price = $book['price'];
        $description = $book['description'];
        $name=$book['bookName'];
       
    ?> 
        <tr>
            <td class="book_image_column" >
                <img src="images/<?php echo $name;?>.png"
                     alt="&nbsp;">
            </td>
            <td>
                <p>
                    <a href="action_index.php?book_id=<?php echo
                           $book['bookID']; ?>">
                        <?php echo $name; ?>
                    </a>
                </p>
                <p>
                    <b>Your price:</b>
                    $<?php echo number_format($price, 2); ?>
                </p>
                <p>
                    <?php echo $description; ?>
                </p>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
	
</main>
<?php include 'footer.php'; ?>