<?php

$servername = "localhost";
$username="root";
$password = "";
$database = "agences";

   $con = mysqli_connect($servername,$username,$password,$database);

   if($con){

   }else{
       die("connection failed:".mysqli_connect_error());
   }
   ?>