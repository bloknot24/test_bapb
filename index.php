<?php include_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Список дел</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="container__head">Список дел</h1>
            <div class="todo__add">
                <form class="todo__form" method="post">
                    <input class="todo__input" type="text" name="task" value="" placeholder="Задача...">
                    <input class="todo__input" type="text" name="description" value="" placeholder="Описание...">
                    <select name="importance" class="todo__select">
                        <option selected value="1">критично</option>
                        <option value="2">важно</option>
                        <option value="3">нормально</option>
                        <option value="4">не важно</option>
                    </select>
                    <select name="status" class="todo__select">
                        <option selected value="1">не исполнено</option>
                        <option value="2">исполнено</option>
                        <option value="3">отменено</option>
                    </select>
                    <button type="submit" class="todo__button">Добавить</button>
                </form>
            </div>
            <table class="table">
                <tr class="table__head">
                    <td class="table__head_style">№</td>
                    <td class="table__head_style">Задача</td>
                    <td class="table__head_style">Описание</td>
                    <td class="table__head_style">Дата<br>создания</td>
                    <td class="table__head_style">Степень<br>важности</td>
                    <td class="table__head_style">Статус</td>
                    <td class="table__head_style">Изменено</td>
                    <td></td>
                </tr>

                <?php
                $tasksAll = $index->showAll();
                static $i = 1;
                foreach($tasksAll as $task): ?>
                <tr class="table__fields">
                    <td class="table__field_style"><?=$i++ . '.'?></td>
                    <td class="table__field_style"><?=$task['name_task']?></td>
                    <td class="table__field_style"><?=$task['description_task']?></td>
                    <td class="table__field_style"><?=$task['date_add']?></td>
                    <td class="table__field_style"><?=$task['name_importance']?></td>
                    <td class="table__field_style"><?=$task['name_status']?></td>
                    <? if($task['date_edit'] == NULL): ?>
                        <td class="table__field_style">No edit</td>
                    <? else: ?>
                        <td class="table__field_style"><?=$task['date_edit']?></td>
                    <? endif; ?>
                    <td><a title="Удалить заметку!" class="table__field_delete" href="delete.php?id=<?=$task['id_task']?>">x</a></td>
                </tr>
                <? endforeach; ?>
            </table>
        </div>
<?php print_r($_POST);?>




    </body>
</html>
