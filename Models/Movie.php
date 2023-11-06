<?php

// 1. creo una nuova classe movie con le relative proprietà

class Movie {

  public $title;
  public $year;
  public $description;
  public $language;
  public $cover;
  public $extra;

  public function __construct(string $_title, int $_year, string $_description, string $_language, string $_cover = null,  string $_extra){
    $this->title = $_title;
    $this->year = $_year;
    $this->description = $_description;
    $this->language = $_language;
    $this->cover = $_cover;
    $this->extra = $_extra;
  }

  public function getExtra(){
    return $this->extra;
  }

}
