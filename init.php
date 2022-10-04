<?php

error_reporting(-1);

// data base
const DB_HOST = 'localhost';
const DB_NAME = 'todolist';
const DB_USER = 'root';
const DB_PASS = '';
include_once 'core/db.php';

// models
include_once 'model/Index.php';
$index = new Index();

//include_once 'widgets/todo-add.php';
