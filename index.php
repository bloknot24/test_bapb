<?php include_once 'header.php'; ?>

<div class="container">
    <h1 class="container__head"><span class="head__span">Список дел</span></h1>
    <div class="todo__add">
        <form class="todo__form" method="post">
            <input class="todo__input" type="text" id="todo-task" name="task" value="" placeholder="Задача...">
            <input class="todo__input" type="text" id="todo-description" name="description" value="" placeholder="Описание задачи...">
            <select name="importance" class="todo__select" id="todo-importance">
                <option selected value="1">критично</option>
                <option value="2">важно</option>
                <option value="3">нормально</option>
                <option value="4">не важно</option>
            </select>
            <select name="status" class="todo__select" id="todo-status">
                <option selected value="1">не исполнено</option>
                <option value="2">исполнено</option>
                <option value="3">отменено</option>
            </select>
            <button type="button" class="todo__button" id="todo-button">Добавить</button>
        </form>
        <script src="js/todo-add.js"></script>
        <p id="add-success"></p>
        <p id="add-error"></p>
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
            <td>
                <a title="Редактировать!" href="edit.php?id=<?=$task['id_task']?>" class="table__field_edit">I</a>
                <a title="Удалить заметку!" class="table__field_delete" href="delete.php?id=<?=$task['id_task']?>">x</a><br>
            </td>
        </tr>
        <? endforeach; ?>
    </table>
        <? if(empty($tasksAll)): ?>
        <div class="tasks__not">
            Задач еще нет, но вы можете создать их.
        </div>
        <? endif; ?>
</div>

<?php include_once 'footer.php'; ?>
