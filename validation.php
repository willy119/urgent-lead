<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "agences")
or die("you have some errors in your connection");

$name = $_POST['username'];
$email = $_POST['username'];
$password = $_POST['password'];



$query ="SELECT * FROM agentp WHERE (email= '$email' OR fname= '$name') and password='$password'";
$result = mysqli_query($con,$query);
    if($result){

    $info=  mysqli_fetch_assoc($result);
    if($info==null){
        echo "password or username incorrect ";
    }else{
        $_SESSION['email']=$name;
        $_SESSION['email']=$email;
        header ("location:../agentpc/map.php");
    }
}

mysqli_close($con);
?>