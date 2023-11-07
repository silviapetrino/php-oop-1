<?php

// This is the Movie class that extends the Production class.

class Movie extends Production{

  public $published_year;
  public $running_time;


  public function __construct(string $_title, string $_description, string $_language, string $_cover = null,  string $_extra, int $_published_year, int $_running_time){
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;

    parent::__construct($_title, $_description, $_language, $_cover, $_extra);

  }

}
