<?php
$id = $_GET['id'];
if (!isset($_SESSION['email'])) {
    header("location:../outer/outer.php");
}
$con = mysqli_connect("localhost", "root", "", "agences")
    or die("you have some errors in your connection");


// create insert query
    $catgr =$_POST['categorie'];
    $dsc = $_POST['description'];
    $reper = $_POST['repair'];
    $nbrvictim = $_POST['nbrvctim'];
    $lat = $_POST['latitude'];
    $longi =$_POST['longitud'];
    $status =$_POST['status'];

    $query = "INSERT INTO signale(cat,dsc,repair,nbrvctm,lat,lon,status,idusr)
     VALUES ('$catgr','$dsc','$reper','$nbrvictim','$lat','$longi', '$status' ,'$id')";
    echo $query;
    $query_run = mysqli_query($con, $query);

    // Check if form is submitted successfully
    if ($query_run) {
        echo '<script type="text/javascript"> alert("Data Saved") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
    }
    header('location:map.php?id='.$id.'');

mysqli_close($con);