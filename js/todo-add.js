window.onload = function() {
    let inp_task = document.querySelector('#todo-task'),
        inp_description = document.querySelector('#todo-description'),
        inp_importance = document.querySelector('#todo-importance'),
        inp_status = document.querySelector('#todo-status');

    document.querySelector('#todo-button').onclick = function() {
        let params = 'task=' + inp_task.value + '&' +
                     'description=' + inp_description.value + '&' +
                     'importance=' + inp_importance.value + '&' +
                     'status=' + inp_status.value;

        ajax(params, 'widgets/todo-add.php', 'index.php', 'Задача добавлена!');
    }
}
