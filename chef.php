<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="chef.css">
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

            <div class="lg">
                <a href="../user/logout.php"> logout </a>
            </div>

            <p class="admin"> chef de protection </p>
        </div>
        <div class="ln">
            <a href="logout.php"> Déconnexion</a>
        </div>
    </header>

    <div class="sidebar">

        <a href="http://localhost/www/chefpc/map.php"><i class="fa-solid fa-location-dot"><span>carte</span></i></a>
        <a href="http://localhost/www/chefpc/index.php"><i class="fa fa-users" aria-hidden="true"></i><span>Agents</span></i></a>
        <a href="http://localhost/www/chefpc/listep.php"><i class="fa fa-medkit" aria-hidden="true"></i> <span>Protection civile</span></a>
        <a href="http://localhost/www/chefpc/catlist.php"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Catégorie</span></a>
        <a href="http://localhost/www/chefpc/inclist.php"><i class="fa-solid fa-triangle-exclamation"></i><span>incident</span></a>

    </div>