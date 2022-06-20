<?php
    include "config.php";

if (isset($_POST['submit'])) {

  $name= $_POST['nom'];
  $adr= $_POST['adresse'];
  $type = $_POST['type'];
  $dsc = $_POST['description'];
  

  //write sql query
  $sql = "INSERT INTO agences ('nom', 'adresse', 'type', 'description') VALUES ('$name','$adr','$type','$dsc')";
//execute the query 
$result = $conn->query($sql);
if ($result == TRUE) {
    echo "new record created successfully.";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();


}


?>