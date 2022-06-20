<?php
include 'connection.php';

   $id = $_GET['idcat'];
   $status=$_GET['status'];

   $q = "UPDATE  cat set status=$status where id_cat=$id";
   $result=mysqli_query($con,$q);

  header('location:catlist.php');
   ?>