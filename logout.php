<?php
session_start();
session_destroy();
header('location: ../outer/outer.php');
?>