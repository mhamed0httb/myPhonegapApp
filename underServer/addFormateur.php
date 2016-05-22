<?php
require_once('connect.php');


$id = $_GET['id'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$mail = $_GET['mail'];
$sql = "DELETE FROM preformateur where id=$id";
$result = $conn->query($sql);
if ($result != 0) {
	$sql2 = "INSERT INTO formateur (nom_formateur,prenom_formateur,mail_formateur,type_formateur) values ('$nom','$prenom','$mail','freelancer')";
	$result2 = $conn->query($sql2);
	echo "good";
} else {
    echo "baad";
}

$conn->close();

?>