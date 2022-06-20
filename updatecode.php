<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'agences');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];

        $query = "UPDATE agentp SET fname='$fname', email='$email', password='$password', contact=' $contact' WHERE id_agent='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>