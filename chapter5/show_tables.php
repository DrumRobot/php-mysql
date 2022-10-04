<?php
    $mysqli = mysqli_connect("localhost", "root", "koreait", "opentutorials");
    $res = mysqli_query($mysqli, "SHOW TABLES;");
    // $res = $mysqli->query("SHOW TABLES");
    if (!$res) {
        echo mysqli_error($mysqli);
        exit;
    }

    $row = mysqli_fetch_assoc($res);
    var_dump($row);
?>
