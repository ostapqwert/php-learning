<?php require('partials/head.view.php') ?>
<?php require('partials/navigation.php'); ?>

<form action="/users" method="POST">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php require('partials/footer.view.php') ?>