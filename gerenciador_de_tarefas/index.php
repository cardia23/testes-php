<?php
class Task{
  public $title;
  public $description;
  public $completed;

  public function markAsCompleted(){
    $this->completed = true;
  }

  public function markAsIncomplete(){
    $this->completed = false;
  }

  public function getTitle(){
    return $this->title = "Estudar";
  }
  public function getDescription(){
    return $this->description = "Estudar para a prova";
  }

  public function isCompleted(){
    if( $this->completed == true ){
      return true;
  } else{
    return false;
  }

}}
?>