<?php
session_start();
$idusr=$_GET['id'];
if (!isset($_SESSION['email'])) {
    header("location:../user/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="us.css">
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
      <div class="icn">
        <a href="http://localhost/www/user/listeh.php"><i class="fas fa-hospital-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://localhost/www/user/listeph.php"><i class='fa-solid fa-staff-aesculapius'></i></a> &#160;&#160;&#160;
        <a href="http://localhost/www/user/listep.php"><i class="fa fa-medkit"></i></a>
      </div>
    </div>

    <div class="ln">
      <a href="logout.php"> Déconnexion</a>
    </div>

    <button class="sn"><a style="text-decoration:none;color: #56434e;" href="http://localhost/www/user/signale.php?id=<?php echo $idusr; ?>"> Signaler</a> </button>
  </header>


  <div class="sidebar">
    <a href="http://localhost/www/user/map.php?id=<?php echo $idusr;?>"><i class="fa-solid fa-location-dot"><span>carte</span></i></a>
    <a href="http://localhost/www/user/listeh.php?id=<?php echo $idusr;?>"><i class='fas fa-hospital-alt'></i><span>hopital</span></a>
    <a href="http://localhost/www/user/listep.php?id=<?php echo $idusr;?>"><i class='fa fa-medkit'></i><span>protection civile</span></a>
    <a href="http://localhost/www/user/listeph.php?id=<?php echo $idusr;?>"><i class='fa-solid fa-staff-aesculapius'></i><span>pharmacie</span></a>
  </div>