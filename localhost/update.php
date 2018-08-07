<?php

include_once "db.php";

$id = $_GET['id'];

if (isset($_POST['status']) or isset($_POST['task_comments'])) {
    $comm = $_POST['task_comments'];
    $stat = $_POST['status'];
    $sql = "update task set stat='$stat', comments='$comm' where id='$id'";
    $value_db  = $db->query($sql);

    if($value_db) {
        header('location:index.php');
    } elseif (!$value_db) {
        echo "Ошибка, повторите ввод!";
    }
}
$sql_2 = "select comments from task where id='$id'";
$row_2 = $db->query($sql_2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" class="form-inline">
    <div class="form-group">
        <label>Добавить комментарий</label>
        <input type="text" required name="task_comments" class="form-control">
        <p>Последний комментарий: <?php while ($result = $row_2->fetch_assoc()):?>
                                    <?php echo "<b>".$result['comments']."</b>"?>
                                  <?php endwhile;?></p><br>
        <label>Статус</label><br>
        <input type="radio" required name="status" value="todo">TODO<br>
        <input type="radio" required name="status" value="doing">DOING<br>
        <input type="radio" required name="status" value="done">DONE<br>
        <input type="submit" value="Добавить" class="btn btn-success">
        <a href="index.php" type="button">Вернуться назад</a>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>


