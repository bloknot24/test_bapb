window.onload = function() {
    let inp_id = document.querySelector('#id-task'),
        inp_task = document.querySelector('#todo-task'),
        inp_description = document.querySelector('#todo-description'),
        inp_importance = document.querySelector('#todo-importance'),
        inp_status = document.querySelector('#todo-status');

    document.querySelector('#todo-button').onclick = function() {
        let params = 'id=' + inp_id.value + '&' +
                     'task=' + inp_task.value + '&' +
                     'description=' + inp_description.value + '&' +
                     'importance=' + inp_importance.value + '&' +
                     'status=' + inp_status.value;

        ajax(params, 'widgets/todo-edit.php', 'index.php', 'Задача обновлена!');
    }
}
