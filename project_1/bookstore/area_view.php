<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<main>
    <h1><?php echo $area_name; ?></h1>
    <?php if (count($books) == 0) : ?>
        <p>There are no books in this area.</p>
    <?php else: ?>

        <?php foreach ($books as $book) : ?>
        <p>
            <a href="action_index.php?book_id=<?php echo
                           $book['bookID']; ?>">
                <?php echo htmlspecialchars($book['bookName']); ?>
            </a>
        </p>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
<?php include 'footer.php'; ?>