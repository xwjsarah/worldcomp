<?php
 
    $area_id = $book['areaID'];
    $book_name = $book['bookName'];
    $description = $book['description'];
    $price = $book['price'];
    
    $price_f = number_format($price, 2);

    $image_filename = $book_name . '.png';
    $image_path = 'images/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;
?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<h1><?php echo htmlspecialchars($book_name); ?></h1>
<div id="left_column">
    <p><img src="<?php echo $image_path; ?>"
            alt="<?php echo $image_alt; ?>" /></p>
</div>

<div id="right_column">
    <p><b>Your Price:</b>
        <?php echo '$' . $price; ?></p>
   
    <form action="cart_index.php" method="get" id="add_to_cart_form">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="book_id" value="<?php echo $book_id; ?>" />
        <b>Quantity:</b>&nbsp;
        <input type="text" name="quantity" value="1" size="2"/>
        <input type="submit" value="Add to Cart" />
    </form>
    <h2>Description</h2>
    <?php echo $description; ?>
</div>
<?php include 'footer.php'; ?>