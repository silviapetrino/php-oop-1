<?php

// This is the main class, witch is named Production

class Production {

  use language; 

  public $title;
  public $description;
  public $cover;
  public $extra;

  public function __construct(string $_title, string $_original_language, array $_main_languages, string $_description, string $_cover = null,  string $_extra){

    if(empty($_title)){
      throw new Exception("Error, you must insert a title!");
    } else {
      $this->title = $_title;
    }

    $this->original_language = $_original_language;
    $this->main_languages = $_main_languages;
    $this->description = $_description;
    $this->cover = $_cover;
    $this->extra = $_extra;
  }

  public function getExtra(){
    return $this->extra;
  }


}