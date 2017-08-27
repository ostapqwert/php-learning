<html>

    <head>
        <title>php learning</title>
    </head>

        <body>
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
        </body>

</html>