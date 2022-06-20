<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:../outer/outer.php");
}
$con = mysqli_connect("localhost", "root", "", "agences")
    or die("you have some errors in your connection");

// create insert query
if (isset($_POST['ajouter'])) {
    $cat = $_POST['cat'];
    $desc = $_POST['dsc'];
    $repair = $_POST['repair'];
    $nbrvctm = $_POST['nbrvctm'];
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $status = $_POST['status'];

    $query = "INSERT INTO incident (cat,dsc,repair,nbrvctm,lat,lon,status)
     VALUES ('$cat','$desc','$repair','$nbrvctm','$lat','$lon', '$status' )";
    $query_run = mysqli_query($con, $query);

    // Check if form is submitted successfully
    if ($query_run) {
        echo '<script type="text/javascript"> alert("Data Saved") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
    }
    header('location:inclist.php');
}
mysqli_close($con);
?>

<?php
include 'chef.php';
?>

<br><br><br>

<div class="incid">

    <h2 id="ajt"> Ajouter un incident </h2>


    <form method="POST">
        <div>
            <label style="display:block;"> Catégorie </label>
            <select name="cat" style=" width: 70%;padding: 9px;">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "agences")
                or die("you have some errors in your connection");
                $query_run = mysqli_query($conn,"SELECT * FROM `cat`");
                if ($query_run) {
                        foreach ($query_run as $row) {
                    $id = $row['id_cat'];
                    $cat = $row['nom_cat'];
                ?>
                    <option value="<?php echo $cat; ?>"> <?php echo $cat; ?> </option>
                        <?php  }} ?>
            </select>
        </div>

        <div >
            <label style="display:block;"> Description </label>
            <textarea rows="3" cols="90" name="dsc"></textarea>
        </div>

        <div >
            <label style="display:block;"> Repair </label>
            <input type="text" name="repair" />
        </div>

        <div>
            <label style="display:block;"> Nombre de victimes</label>
            <input type="number" name="nbrvctm" />
        </div>

        <div >
            <label style="display:block;"> Latitude</label>
            <input type="number" step="any" name="lat" />
        </div>

        <div>
            <label style="display:block;"> Longitude</label>
            <input type="number" step="any" name="lon" />
        </div>
        <div>
            <label style="display:block;"> Status </label>
            <select name='status' style=" width: 70%; padding: 9px;">
                <option value='active'>Active</option>
                <option value='desactive'>Désactive</option>
            </select>
        </div>
        <br>
        <button class="btn" name="ajouter">Ajouter </button>
    </form>
</div>
</div>
</body>

</html>