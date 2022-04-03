<?php

$api = 'https://masak-apa-tomorisakura.vercel.app/api/categorys/recipes/resep-seafood';
$data = file_get_contents($api);
$menu = json_decode($data, true);

$menu = $menu['results']; //agar yang diambil didalam array menu

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resep Hari Ini - Rezal</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          RESEP HARI INI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" href="allmenu.php">All Menu</a>
            <a class="nav-link " aria-current="page" href="ayam.php">Resep Ayam</a>
            <a class="nav-link " aria-current="page" href="daging.php">Resep Daging</a>
            <a class="nav-link active " aria-current="page" href="seafood.php">Resep Seafood</a>
            <a class="nav-link " aria-current="page" href="hari-raya.php">Masakan Hari Raya</a>
            <a class="nav-link " aria-current="page" href="tradisional.php">Masakan Tradisional</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row mt-2">
        <div class="col text-center m-5">
          <h1>RESEP SEAFOOD</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach($menu as $row) : ?>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-3 bg-body rounded mx-auto " style="width:20rem;">
            <img src="<?= $row["thumb"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row["title"]; ?></h5>
              <p class="card-text">Porsi : <?= $row["portion"]; ?></p>
              <p class="card-text">Kesulitan : <?= $row["dificulty"]; ?></p>
              <a href="<?php echo "https://www.masakapahariini.com/resep/".$row["key"]; ?>" class="btn btn-primary">Cek Resep</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


  </body>
</html>