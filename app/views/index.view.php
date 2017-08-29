<?php require('partials/head.view.php') ?>
<?php require('partials/navigation.php'); ?>

<ul>
<?php foreach ($users as $user): ?>
    <li><?php echo $user->name; ?></li>
    <?php endforeach; ?>
</ul>

    <form action="/users" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>


<?php require('partials/footer.view.php') ?>