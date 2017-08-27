<html>

    <head>
        <title>php learning</title>
    </head>

        <body>

        <nav>
            <ul>
                <li><a href="/">Main page</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contacts">Contacts</a></li>

            </ul>
        </nav>

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
