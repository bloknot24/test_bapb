<?php

include_once '../init.php';
$data = $_POST;

$data['task'] = htmlspecialchars($data['task']);
$data['description'] = htmlspecialchars($data['description']);
$data['task'] = trim($data['task']);
$data['description'] = trim($data['description']);

if(trim($data['task']) == '') {
    $index->error("Введите задачу");
} elseif(preg_match('/^[A-Za-zА-Яа-яЁё0-9_!?., ]*$/iu', $data['task']) == 0) {
    $index->error("Задача только цифры или буквы!");
} elseif(mb_strlen($data['task'], 'UTF-8') > 30) {
    $index->error("Задача не более 30 символов!");
} elseif($data['description'] == '') {
    $index->error("Введите описание!");
} elseif(mb_strlen($data['description'], 'UTF-8') > 200) {
    $index->error("Описание не более 200 символов!");
} elseif(preg_match('/^[A-Za-zА-Яа-яЁё0-9_!?., ]*$/iu', $data['description']) == 0) {
    $index->error("Описание только цифры или буквы!");
} else {
    $index->todoAdd($data);
    echo '1';
}
