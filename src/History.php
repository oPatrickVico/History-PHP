<?php

namespace History;

class History {
  private $history = array();
  private $historyIndex = -1; // When the class is instantiated, it should add the initial state as 0. Therefore, if you have no initial state, it can't be zero: it has to be -1. With the instantiation, becomes 0, as it should be.

  public function addHistory($state) {
    $this->historyIndex++;
    $this->history[$this->historyIndex] = $state;
  }

  public function undo() {
    $this->historyIndex--;
    return $this->history[$this->historyIndex];
  }

  public function redo(){
    $this->historyIndex++;
    return $this->history[$this->historyIndex];
  }
}