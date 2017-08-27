<?php require ('partials/head.view.php')?>
<?php require ('partials/navigation.php'); ?>

            <ul>

                <?php foreach($tasks as $task): ?>
                <li><strong>Ttile: </strong>

                    <?php if($task->completed): ?>

                        <strike><?php echo $task->getDescription(); ?></strike>

                        <?php else: ?>

                             <?php echo $task->getDescription(); ?>

                        <?php endif; ?>


                </li>
                <?php endforeach; ?>
            </ul>

<?php require ('partials/footer.view.php')?>