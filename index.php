<?php
$data = file_get_contents('assets/data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"]; //menghilangkan key menu
// var_dump($menu[0]["nama"]);
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/css/style.css">

  <title>Puzzle Hut</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper red darken-4">
      <div class="container">
        <a href="#" class="brand-logo center">Puzzle Hut</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="sass.html">All Menu</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. end navbar -->

  <div class="container">
    <h1>All menu</h1>
    <div class="row">
      <?php foreach ($menu as $row) : ?>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/menu/<?= $row["gambar"]; ?>">
              <span class="card-title black-text">
                <h5><?= $row["nama"]; ?></h5>
              </span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>Rp.<?= $row["harga"];  ?></p>
              <p><?= $row["deskripsi"];  ?>.</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Jquery with AJAX -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
</body>

</html>