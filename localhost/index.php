<!doctype html>
<?php include_once "db.php";?>


<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-fluid">
            <h1>Список задач</h1>
            <input type="submit" class="btn btn-success center-block" value="Добавить задачу" data-toggle="modal" data-target="#exampleModalCenter">
            <div class="row">
                <div class="col-md-4">
                    <h3>TODO</h3>
                    <hr>
                    <?php while ($result_one = $row_one->fetch_assoc()): ?>
                        <?php echo "<b>Номер задачи: ".$result_one['id']."<br></b>" ?>
                        <?php echo "Название: ".$result_one['name']."<br>" ?>
                        <?php echo "Описание: ".$result_one['content']."<br>" ?>
                        <a href="update.php?id=<?php echo $result_one['id'];?>" class="btn btn-primary">Редактировать</a><br>
                        <?php echo "----------------------<br>" ?>
                    <?php endwhile; ?>
                </div>
                <div class="col-md-3">
                    <h3>DOING</h3>
                    <hr>
                    <?php while ($result_two = $row_two->fetch_assoc()): ?>
                        <?php echo "<b>Номер задачи: ".$result_two['id']."<br></b>" ?>
                        <?php echo "Название: ".$result_two['name']."<br>" ?>
                        <?php echo "Описание: ".$result_two['content']."<br>" ?>
                        <a href="update.php?id=<?php echo $result_two['id'];?>"  class="btn btn-primary">Редактировать</a><br>
                        <?php echo "----------------------<br>" ?>
                    <?php endwhile; ?>
                </div>
                <div class="col-md-2">
                    <h3>DONE</h3>
                    <hr>
                    <?php while ($result_three = $row_three->fetch_assoc()): ?>
                        <?php echo "<b>Номер задачи: ".$result_three['id']."<br></b>" ?>
                        <?php echo "Название: ".$result_three['name']."<br>" ?>
                        <?php echo "Описание: ".$result_three['content']."<br>" ?>
                        <a href="update.php?id=<?php echo $result_three['id'];?>" class="btn btn-primary">Редактировать</a><br>
                        <?php echo "----------------------<br>" ?>
                    <?php endwhile; ?>
                </div>
            </div>
    </div>
    <!---Modals--->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Добавить новую задачу</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="add.php">
                        <div class="form-group">
                            <label>Название задачи</label>
                            <input type="text" required name="task_name" class="form-control"> <br>
                            <label>Описание задачи</label>
                            <input type="text" required name="task_content" class="form-control"> <br>
                            <label>Статус</label><br>
                            <input type="radio" required name="status" value="todo">TODO<br>
                            <input type="radio" required name="status" value="doing">DOING<br>
                            <input type="radio" required name="status" value="done">DONE<br>
                            <input type="submit" value="Добавить" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>