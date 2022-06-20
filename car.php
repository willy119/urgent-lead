<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="car.css">
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
            height: 571px;
            border-radius: 27px;
            width: 85%;
            margin-top:22px;
            margin-left:110px;

        }

        .l {
            padding-top: 49px;
            width: 100%;
        }

        .ll h3 {
            padding: 23px;
        }

        #maCarte {
            height: 470px;
            width: 90%;
            margin-left: 49px;
            margin-top: -33px;
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
        <div class="rrr">
            <a href="http://localhost/www/user/login.php"> connexion </a>
        </div>
    </header>
   