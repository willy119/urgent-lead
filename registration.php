<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "agences")
or die("you have some errors in your connection");
echo "you are  connected";

// create insert query
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT into user(username,email,password)
values('$name', '$email', '$password') ";

$result = mysqli_query($con, $query);

header('location: login.php');
mysqli_close($con);

?>