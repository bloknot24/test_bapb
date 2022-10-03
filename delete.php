<?php
include_once 'init.php';
$id = $_GET['id'];
$index->deleteOne($id);
header('Location: index.php');
exit();
