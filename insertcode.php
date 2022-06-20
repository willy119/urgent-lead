<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'agences');

if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO agentp (`fname`,`email`,`password`,`contact`) VALUES ('$fname','$email','$password','$contact')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>