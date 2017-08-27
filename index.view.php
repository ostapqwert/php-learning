<html>

    <head>
        <title>php learning</title>
    </head>

        <body>
            <ul>
                <li><strong>Ttile: </strong><?php echo $task['title']; ?></li>
                <li><strong>Due Date: </strong><?php echo $task['due']; ?></li>
                <li><strong>Person responsibility </strong><?php echo $task['assigned_to']; ?></li>
                <li><strong>Status </strong><?php echo ($task['complited'] ? 'complited' : 'not complited') ?></li>
            </ul>
        </body>

</html>