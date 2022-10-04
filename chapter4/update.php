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
        <form action="update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?= print_title() ?>" />
            <p>
                <input type="text" name="title" placeholder="Title" value="<?= print_title() ?>" />
            </p>
            <!-- 내용수정 -->
            <!-- <p>
                <textarea name="description" placeholder="Description"><?= print_description() ?></textarea>
            </p> -->
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form>        
    </body>
</html>
