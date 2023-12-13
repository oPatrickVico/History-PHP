<?php

namespace History;
use History\History;

class TodoList {
  private $todos = array();
  private $history;

  public function __construct() {
    $this->history = new History();
    $this->history->addHistory($this->todos);
  }

  public function addTodo(string $todo) {
    $this->todos[] = $todo;
    $this->history->addHistory($this->todos);
  }

  public function popTodo() {
    $lastTodo = array_pop($this->todos);
    $this->history->addHistory($this->todos);
    return $lastTodo;
  }

  public function undo() {
    $this->todos = $this->history->undo();
  }

  public function redo() {
    $this->todos = $this->history->redo();
  }

  public function getTodoList() {
    return $this->todos;
  }
}