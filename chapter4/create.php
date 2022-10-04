<?php
    require('lib/print.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?= print_title() ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <a href="create.php">create</a>
        <a href="update.php">update</a>
        <form action="create_process.php" method="post">
            <p>
                <input type="text" name="title" placeholder="Title" />
            </p>
            <p>
                <textarea name="description" placeholder="Description"></textarea>
            </p>
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form>
        <h2>
            <?= print_title() ?>
        </h2>
        <?= print_description() ?>
    </body>
</html>
