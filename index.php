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

// 2. creo un array con istanze della classe Movie

$movies = [
  new Movie('Willy Wonka & the Chocolate Factory', 1971, 'A fantastical musical film based on Roald Dahl \' s book. Gene Wilder plays the role of Willy Wonka, the eccentric owner of the chocolate factory, who opens its doors to a group of contest-winning children.', 'English', 'willy-wonka-the-chocolate-factory_a24690.jpg', 'extra extra extra' ),
  new Movie('Charlie and the Chocolate Factory', 2005, 'A more recent adaptation of Roald Dahl \' s book, directed by Tim Burton. Johnny Depp plays Willy Wonka in this version, which follows the original material more closely than the 1971 film.', 'English', 'MV5BNjcxMjg1Njg2NF5BMl5BanBnXkFtZTcwMjQ4NzMzMw@@._V1_.jpg', 'extra extra extra'),
  new Movie('Wonka', 2023, 'The movie aims to be a prequel that narrates the origins of the character born from the pen of the writer Roald Dahl, retracing all the adventures faced in youth to fulfill the dream of opening a chocolate factory.', 'English', 'Wonka-113186318-large.jpg', 'extra extra extra')
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Movies</title>
</head>
<body>

    <div class="container my-3">

      <div class="row justify-content-around">

      <h3 class="my-5">Here are some films based on the book "Charlie and the Chocolate Factory" written by Roald Dahl. Here are some cinematic adaptations of the book:</h3>

      <?php foreach($movies as $movie): ?>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100 h-100 object-fit-cover" src="img/<?php echo $movie->cover?>" alt="<?php echo $movie->title?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $movie->title . ' - ' . $movie->year ?></h5>
            <p>Language: <?php echo $movie->language?></p>
            <p class="card-text"><?php echo $movie->description?></p>
            <button class="btn btn-warning">More info: <?php echo $movie->getExtra()?></button>
          </div>
        </div>
      <?php endforeach;?>
      </div>
  
    </div>
        
  </body>

</html>