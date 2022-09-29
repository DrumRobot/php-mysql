<?php
$id = $_GET['id'] ?? 'HTML';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="4-8-file_get_contents.php?id=HTML">HTML</a></li>
            <li><a href="4-8-file_get_contents.php?id=CSS">CSS</a></li>
            <li><a href="4-8-file_get_contents.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?=$id?>
        </h2>
        <?php
            echo nl2br(file_get_contents("data/$id"));
        ?>
    </body>
</html>
