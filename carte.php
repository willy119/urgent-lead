<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cart.css">
    <script src="https://kit.fontawesome.com/4c22d98e44.js" crossorigin="anonymous"></script>
    <title>OpenStreetMap</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <!-- CSS -->
    <style>
        body {
            margin: -7px;
            padding: 2px;
            background-color: #d6e3e3f5;
        }

        .ll {
            background-color: #ffffff;
            height: 578px;
            border-radius: 32px;
            width: 1099px;
            margin-top: -45px;

        }

        .l {
            margin-left: 262px;
            padding-top: 100px;
            width: 1100px;
            margin-right: 0px;

        }

        .ll h3 {
            padding: 23px;
        }

        #maCarte {
            height: 470px;
            width: 90%;
            margin-left: 42px;
            margin-top: -31px;
            padding-right: 10px;
        }
    </style>
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

    <div class="sidebar">

        <a href="http://localhost/www/chefpc/map.php"><i class="fa-solid fa-location-dot"><span>carte</span></i></a>
        <a href="http://localhost/www/chefpc/index.php"><i class="fa fa-users" aria-hidden="true"></i><span>Agents</span></i></a>
        <a href="http://localhost/www/chefpc/listep.php"><i class="fa fa-medkit" aria-hidden="true"></i><span>Protection civile</span></a>
        <a href="http://localhost/www/chefpc/catlist.php"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Catégorie</span></a>
        <a href="http://localhost/www/chefpc/inclist.php"><i class="fa-solid fa-triangle-exclamation"></i><span>incident</span></a>
    </div>