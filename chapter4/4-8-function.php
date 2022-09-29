<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>function</h1>
        <?php
            $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
            echo $str;
        ?>
        <h2>strlen()</h2>
        <?=strlen($str).'<br>'?>

        <h2>nl2br()</h2>
        <?php
            echo nl2br($str).'<br><br>';
        ?>
        <?php
            $str = "한글은 한 글자에 3byte";
            echo $str;
        ?>
        <h2>strlen()</h2>
        <?=strlen($str)?>
        <h2>mb_strlen()</h2>
        <?=mb_strlen($str)?>
    </body>
</html>
