<?php
require_once('connect.php');



$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$sql = "INSERT INTO personne ( nom, prenom)
VALUES ( '$nom','$prenom')";

if (mysqli_query($conn, $sql)) { 
    echo "successfully added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>