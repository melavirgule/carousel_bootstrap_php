<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Carousel Bootstrap PHP</title>
</head>

<body>
  <?php
  $dossier = './images';
  $scan = scandir($dossier);

  //var_dump($scan)
  ?>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <?php
    //Utilisation d'une boucle foreach pour afficher els boutons attention à "." et ".." qui ne sont pas des images.
    foreach ($scan as $k => $v) {
      if ($v != "." && $v != "..") {
        //TERMINER LA BOUCLE !!!
    ?>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$k-2?>" class="<?php if($k==2){echo "active";} ?>" aria-label="Slide <?=$k-2?>"></button>
      <?php
     
      }
    }  
      ?>
    </div>

    <div class="carousel-inner">
      <?php
      foreach ($scan as $k => $v) {
        if ($v != "." && $v != "..") {
      ?>
          <div class="carousel-item <?php echo $k == 2 ? "active" : ""; ?>">
            <img src="./<?=$dossier?>/<?= $v ?>" class="d-block w-100" alt="Inde">
          </div>
      <?php
        }
      }
      ?>
    </div>



    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>


    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>


  </div>


  <script src="js/bootstrap.js"></script>
</body>

</html>