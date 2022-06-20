<?php
include 'connection.php';

   $id = $_GET['idincd'];
   $status=$_GET['status'];

   $q = "UPDATE  incident set status=$status where id_inc =$id";
   $result=mysqli_query($con,$q);

  header('location:inclist.php');
   ?>