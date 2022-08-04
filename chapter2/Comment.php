<?php

class Comment
{
  public $text;
  public $userId;

  // constructor

  public function __construct($text, $userId){
    $this->text = $text; 
    $this->userId = $userId;
  }
}

?>