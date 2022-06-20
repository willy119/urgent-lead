<?php 
include 'chef.php';
session_start();
if(!isset($_SESSION['email'])){
    header("location:../outer/outer.php");
}
?>
    


                  <br><br><br>

         <div class="poi" >

                 <h2 id="ajt"> Ajoute une POI </h2>
            
                 <form method="POST" >
                        <label> Nom </label>
                        <br>
                        <input type="text" name="name"/>          
                        <br>
                        <label> Description </label>
                        <br>
                        <textarea rows="3" cols="79" name="description"></textarea>
                        

                        <br>
                        <label> Adresse </label>
                        <br>
                        <input type="text" name="adresse"/>
                        <br>
                        <label> Latitude</label>
                        <br>
                        <input type="number" step="any" name="lat"/>
                        <br>
                        <label> Longitude </label>
                        <br>
                        <input type="number" step="any" name="lon"/>
                        
                    

                        <br>
                        <label>Type </label>
                        <br>
                        <select name = 'type'>
                            <option value = 'protection civile'>Protection civile</option>
                        </select>
                        <button class="btn" name="sauvgarder">Ajouter </button>
                    </form>
         </div>
    </body>
</html>

<?php

    $con = mysqli_connect("localhost", "root", "","agences")
    or die("you have some errors in your connection");
    
    // create insert query
    if(isset($_POST['sauvgarder']))
    {

    $name = $_POST['name'];
    $latitude = $_POST['lat'];
    $longitude = $_POST['lon'];
    $description = $_POST['description'];
    $adresse = $_POST['adresse'];
    $type = $_POST['type'];

    $query = "INSERT INTO agences (nom,lat,lon,description,adresse,type)
     VALUES ('$name','$latitude','$longitude','$description', '$adresse', '$type')";
    $query_run = mysqli_query($con, $query);

	// Check if form is submitted successfully
	if($query_run){
        echo '<script type="text/javascript"> alert("Data Saved") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
    }
    header('location: listep.php');    
}
mysqli_close($con);
?>