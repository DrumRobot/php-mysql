<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="4-13.php">WEB</a></h1>
        <ol>
            <li><a href="4-13.php?id=HTML">HTML</a></li>
            <li><a href="4-13.php?id=CSS">CSS</a></li>
            <li><a href="4-13.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
                // $id = $_GET['id'] ?? 'Welcome';
                if(array_key_exists('id', $_GET)) {
                    echo $_GET['id'];
                } else {
                    echo "Welcome";
                }
            ?>
        </h2>
        <?php
            if(isset($_GET['id'])) {
                echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            }
        ?>
    </body>
</html>