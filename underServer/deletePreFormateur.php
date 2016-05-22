<?php
require_once('connect.php');


$id = $_GET['id'];
$sql = "DELETE FROM mooc_user where id=$id";
$result = $conn->query($sql);
if ($result != 0) {
	echo "good";
    
} else {
    echo "baad";
}

$conn->close();

?>