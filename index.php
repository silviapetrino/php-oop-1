<?php 

// 1. creo una nuova classe movie con le relative proprietà

class Movie {

  public $title;
  public $year;
  public $description;
  public $language;
  public $cover;

  public function __construct(string $_title, int $_year, string $_description){
    $this->title = $_title;
    $this->year = $_year;
    $this->description = $_description;
  }

}


// 2. creo un array con istanze della classe Movie

$movies = [
  new Movie('Willy Wonka & the Chocolate Factory', 1971, 'A fantastical musical film based on Roald Dahl \' s book. Gene Wilder plays the role of Willy Wonka, the eccentric owner of the chocolate factory, who opens its doors to a group of contest-winning children.'),
  new Movie('Charlie and the Chocolate Factory', 2005, 'A more recent adaptation of Roald Dahl \' s book, directed by Tim Burton. Johnny Depp plays Willy Wonka in this version, which follows the original material more closely than the 1971 film.'),
  new Movie('Wonka', 2023, 'The movie aims to be a prequel that narrates the origins of the character born from the pen of the writer Roald Dahl, retracing all the adventures faced in youth to fulfill the dream of opening a chocolate factory.')
];

var_dump($movies);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php-oop</title>
</head>
<body>

  
  
</body>
</html>