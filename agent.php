<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="agent.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <script src="https://kit.fontawesome.com/4c22d98e44.js" crossorigin="anonymous"></script>
</head>

<body>
  <input type="checkbox" id="check">
  <header>
    <label for="check">
      <i class='fa-solid fa-bars' id='menubar'></i>
    </label>

    <div class="larea">
      <h3>Emergency</h3>
    </div>

    <div class="rarea">
      <div class="icone">
        <a href="http://localhost/www/chefpc/listep.php"><i class="fa fa-medkit"></i></a>
      </div>
      <p class="admin"> chef de protection </p>
    </div>
    <div class="ln">
      <a href="../user/logout.php"> Déconnexion</a>
    </div>
  </header>


  <div class="sidebar" style="font-size:16px; font-weight:5px">
    <a href="http://localhost/www/chefpc/map.php"><i class="fa-solid fa-location-dot"><span>carte</span></i></a>
    <a href="http://localhost/www/chefpc/index.php"><i class="fa fa-users"></i><span>agents</span></i></a>
    <a href="http://localhost/www/chefpc/listep.php"><i class="fa fa-medkit"></i> <span>Protection civile</span></a>
    <a href="http://localhost/www/chefpc/catlist.php"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Catégorie</span></a>
    <a href="http://localhost/www/chefpc/inclist.php"><i class="fa-solid fa-triangle-exclamation"></i><span>incident</span></a>


  </div>