<?php
include 'us.php';
$id = $_GET['id'];
if (!isset($_SESSION['email'])) {
    header("location:../outer/outer.php");
}
$con = mysqli_connect("localhost", "root", "", "agences")
    or die("you have some errors in your connection");


?>




<br><br><br>

<div class="sgnl">

    <h2 id="ajt"> Signaler un incident </h2>


    <form method='POST' action="add.php?id=<?php echo $idusr;?>" class="abc">
        <div>
            <label style="display:block;"> Catégorie </label>
            <select name="categorie" style=" width: 75%;padding: 9px;">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "agences")
                    or die("you have some errors in your connection");
                $query_run = mysqli_query($conn, "SELECT * FROM `cat`");
                if ($query_run) {
                    foreach ($query_run as $row) {
                        $id = $row['id_cat'];
                        $cat = $row['nom_cat'];
                ?>
                        <option value="<?php echo $cat; ?>"> <?php echo $cat; ?> </option>
                <?php  }
                } ?>
            </select>
        </div>

        <div>
            <label style="display:block;"> Description </label>
            <textarea rows="2" cols="87" name="description"></textarea>
        </div>

        <div>
            <label style="display:block;"> Repair </label>
            <input type="text" name="repair" required />
        </div>

        <div>
            <label style="display:block;"> Nombre de victimes</label>
            <input type="number" name="nbrvctim" required />
        </div>

        <div>
            <label style="display:block;"> Latitude</label>
            <input type="number" step="any" name="latitude" required />
        </div>

        <div>
            <label style="display:block;"> Longitude</label>
            <input type="number" step="any" name="longitud" required />
        </div>
        <div>
            <label style="display:block;"> Status </label>
            <select name="status" style=" width: 75%; padding: 9px;">
                <option value='active'>Active</option>
                <option value='desactive'>Désactive</option>
            </select>
        </div>

        <div>
            <input type="hidden" name="iduser" value="<?php echo $idusr; ?>" />
        </div>
        <br>
        <button type="submit" class="bttn" name="signaler">signaler</button>
    </form>
</div>
</div>
</body>

</html>