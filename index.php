<?php 
//  import traits 
try {
  include_once __DIR__ . '/Traits/Language.php';
  include_once __DIR__ . '/Models/Production.php';
  include_once __DIR__ . '/Models/Movie.php';
  include_once __DIR__ . '/Models/TvSerie.php';
  require_once __DIR__ . '/db/db.php';
} catch (Exception $e) {
  $error = $e->getMessage();
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="./css/style.css" rel="stylesheet">
  <title>Production</title>
</head>
<body>

    <?php  if(isset($error)): ?>

    <div class="alert alert-danger m-5" role="alert">
      <?php echo $error ?>
    </div>

    <?php else: ?>

    <div class="container py-5">

      <div class="row justify-content-around">

      <h2 class="my-3">Your movies and Tv shows:</h2>

      <?php foreach($productions as $product): ?>
        <div class="card p-2" style="width: 18rem;">
          <img class="card-img-top w-100 h-100 object-fit-cover" src="img/<?php echo $product->cover?>" alt="<?php echo $product->title?>">
          <div class="card-body">
            <h5 class="card-title fw-bold "><?php echo $product->title ?></h5>
            <p><?php echo $product->published_year ?? $product->aired_from_year . ' - ' . $product->aired_to_year  ?></p>
            <p><span class="fw-bold">Orginal language:</span> <?php echo $product->original_language?></p>
            <p><span class="fw-bold">Main languages:</span> <?php echo implode(', ', $product->main_languages)?></p>
            <p class="card-text"><span class="fw-bold">Description: </span><?php echo $product->description?></p>

            <span class="d-block pb-1">
              <?php echo isset($product->running_time) ? 'Running time: ' . $product->running_time . ' min' : ' Number of episodes: ' . $product->number_of_episodes ?>
            </span>
            <span class="d-block pb-1">
              <?php echo isset($product->number_of_seasons) ? 'Number of seasons ' . $product->number_of_seasons : '  ' ?>
            </span>

            <button class="btn btn-warning">More info: <?php echo $product->getExtra()?></button>
          </div>
        </div>
      <?php endforeach;?>
      </div>
  
    </div>
        <?php endif; ?>
  </body>

</html>