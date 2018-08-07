<?php


$db = mysqli_connect("localhost","root","","SPURIT");

if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}

$sql_one = "select * from task where stat = 'TODO' ORDER BY created_at DESC ";
$sql_two = "select * from task where stat = 'DOING' ORDER BY created_at DESC";
$sql_three = "select * from task where stat = 'DONE' ORDER BY created_at DESC";

$row_one = $db->query($sql_one);
$row_two = $db->query($sql_two);
$row_three = $db->query($sql_three);

