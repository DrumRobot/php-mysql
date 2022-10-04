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
        <?php if (isset($_GET['id'])) {?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
            <!-- <a href="delete_process.php?id=<?=$_GET['id']?>">delete</a> -->
            <form action="delete_process.php" method="post">
                <input type="hidden" name="id" value="<?=$_GET['id']?>" />
            </form>
        <?php }?>
        <h2>
            <?= print_title() ?>
        </h2>
        <?= print_description() ?>
    </body>
</html>
