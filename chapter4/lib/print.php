<?php
    function print_title() {
        echo $_GET['id'] ?? "Welcome";
    }
    function print_description() {
        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, PHP";
        }
    }
    function print_list() {
        $list = scandir('./data');
        foreach($list as $item) {
            if($item != '.' && $item != '..') {
                echo "<li><a href=\"index.php?id=$item\">$item</a></li>\n";
            }
        }
    }
?>
