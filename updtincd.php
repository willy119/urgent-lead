<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'agences');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];

        $desc = $_POST['dsc'];
        $cat = $_POST['cat'];
    

        $query = "UPDATE incident SET cat='$cat', dsc='$desc' WHERE id_inc ='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:inclist.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>