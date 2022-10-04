<?php

include_once 'header.php';
$id = $_GET['id'];
$update = $index->updateOne($id); ?>

<div class="container">
    <h1 class="container__head"><span class="head__span">Редактировать пункт</span></h1>
    <div class="todo__add">
        <form class="todo__form" method="post">
            <input class="todo__input" type="text" id="todo-task" name="task" value="<?=$update['name_task']?>" placeholder="Задача...">
            <input class="todo__input" type="text" id="todo-description" name="description" value="<?=$update['description_task']?>" placeholder="Описание задачи...">
            <input type="hidden" id="id-task" name="id" value="<?=$update['id_task']?>">
            <select name="importance" class="todo__select" id="todo-importance">
                <option <?php if ($update['importance_task']==1) echo "selected"; ?> value="1">критично</option>
                <option <?php if ($update['importance_task']==2) echo "selected"; ?> value="2">важно</option>
                <option <?php if ($update['importance_task']==3) echo "selected"; ?> value="3">нормально</option>
                <option <?php if ($update['importance_task']==4) echo "selected"; ?> value="4">не важно</option>
            </select>
            <select name="status" class="todo__select" id="todo-status">
                <option <?php if ($update['status_task']==1) echo "selected"; ?> value="1">не исполнено</option>
                <option <?php if ($update['status_task']==2) echo "selected"; ?> value="2">исполнено</option>
                <option <?php if ($update['status_task']==3) echo "selected"; ?> value="3">отменено</option>
            </select>
            <button type="button" class="todo__button" id="todo-button">Изменить</button>
        </form>
        <script src="js/todo-edit.js"></script>
        <p id="add-success"></p>
        <p id="add-error"></p>
    </div>
</div>

<?php include_once 'footer.php'; ?>
