<?php

// This is the main class, witch is named Production

class Production {

  public $title;
  public $description;
  public $language;
  public $cover;
  public $extra;

  public function __construct(string $_title, string $_description, string $_language, string $_cover = null,  string $_extra){
    $this->title = $_title;
    $this->description = $_description;
    $this->language = $_language;
    $this->cover = $_cover;
    $this->extra = $_extra;
  }

  public function getExtra(){
    return $this->extra;
  }

}