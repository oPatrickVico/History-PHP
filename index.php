<?php

require_once "vendor/autoload.php";

use History\TodoList;

$todolist = new TodoList();

$todolist->addTodo("Hello");
$todolist->addTodo("World");

// Testing undo
$todolist->undo();
$todolist->addTodo("Mortal");
print_r($todolist->getTodoList());
echo PHP_EOL.PHP_EOL;

// Testing redo
$todolist->addTodo("Wassup");
$todolist->addTodo("my bro");
$todolist->undo();
print_r($todolist->getTodoList());
echo PHP_EOL.PHP_EOL;
$todolist->redo();
print_r($todolist->getTodoList());
echo PHP_EOL.PHP_EOL;