<?php
require_once('connect.php');



$sql = "SELECT * FROM mooc_user";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo($row['prenom']);
      
         }
} else {
    echo "0 results";
}
$conn->close();
	 
?>