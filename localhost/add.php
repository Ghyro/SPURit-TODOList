<?php

include_once "db.php";

if (isset($_POST['task_name']) and isset($_POST['task_content']) and isset($_POST['status'])) {
    $name = $_POST['task_name'];
    $content = $_POST['task_content'];
    $stat = $_POST['status'];

    $sql = "insert into task (name, content, stat) values ('$name','$content','$stat')";
    $value_db  = $db->query($sql);
    
    if($value_db) {
        header('location:index.php');
    } elseif (!$value_db) {
        echo "Ошибка, повторите ввод!";
    }
}