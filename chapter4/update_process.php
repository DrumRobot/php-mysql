<?php
    /* Title이 바뀌었으면 파일명 수정 */
    if ($_POST['old_title'] != $_POST['title']) {
        rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
    }
    /* 파일 내용 수정 */
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: index.php?id='.$_POST['title']);
?>