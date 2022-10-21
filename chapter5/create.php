<?php
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    if($result === false) {
        echo mysqli_error($conn);
    }

    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $list .= "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol><?=$list?></ol>
        <a href="create.php">create</a>
        <a href="update.php">update</a>
        <form action="process_create.php" method="post">
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
    </body>
</html>
