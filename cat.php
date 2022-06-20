<?php
include 'cate.php';
?>

<br><br><br>
<div class="catt">
    <h2 id="ajt"> Ajouter une catégorie </h2>
    <form method="POST">

        <label> Nom </label>
        <br>
        <input type="text" name="nom" />
        <br>

        <br>
        <label>Status</label>
        <br>
        <select name='status'>
            <option value='active'>Active</option>
            <option value='desactive'>Désactive</option>
        </select>
        <br>

        <br>
        <button name="save" class="bttn"> Sauvegarder </button>

    </form>
</div>
</body>

</html>

<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "agences")
    or die("you have some errors in your connection");

// create insert query
if (isset($_POST['save'])) {
    $cat = $_POST['nom'];
    $status = $_POST['status'];



    $query = "INSERT INTO cat (nom_cat,status)
     VALUES ('$cat','$status')";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) !== 1) {
        header('location: catlist.php');
    }
    // Check if form is submitted successfully
    if ($query_run) {
        echo '<script type="text/javascript"> alert("Data Saved") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
    }
}
mysqli_close($con);
?>