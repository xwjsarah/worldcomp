
<?php include 'header.php'; ?>

<main>
    <h1>Your Cart</h1>
    <?php if (cart_product_count() == 0) : ?>
        <p>There are no books in your cart.</p>
    <?php else: ?>
        <p>To remove an item from your cart, change its quantity to 0.</p>
        <form action="cart_index.php" method="post">
          <input type="hidden" name="action" value="update">
            <table id="cart">
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Price</th>
                    <th class="right">Quantity</th>
                    <th class="right">Total</th>
                </tr>
                <?php foreach ($cart as $book_id => $item) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td class="right">
                            <?php echo sprintf('$%.2f', $item['price']); ?>
                        </td>
                        <td class="right">
                            <input type="text" size="3" class="right"
                                   name="items[<?php echo $book_id; ?>]"  //go back here
                                   value="<?php echo $item['quantity']; ?>">
                        </td>
                        <td class="right">
                            <?php echo sprintf('$%.2f', $item['line_price']); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr id="cart_footer" >
                    <td colspan="3" class="right" ><b>Subtotal</b></td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', cart_subtotal()); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="right">
                        <input type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
        </form>

    <?php endif; ?>

    <p>Return to: <a href=".">Home</a></p>

   
        <p>Return to: <a href="action_index.php?area_id= <?php echo $_SESSION['last_area_id'];  ?>">
        <?php echo $_SESSION['last_area_name']; ?></a></p>
	
</main>
<?php include 'footer.php'; ?>
