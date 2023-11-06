<?php 

require_once __DIR__ . '/db/db.php';

include_once __DIR__ . '/Models/Movie.php';

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