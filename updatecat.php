<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'agences');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $nom= $_POST['nom'];
        

        $query = "UPDATE cat SET nom_cat ='$nom' where id_cat = '$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:catlist.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>