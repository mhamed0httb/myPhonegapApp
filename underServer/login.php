<?php
	require_once('connect.php');
	
	
	$username = $_POST["username"];
	$pwd = $_POST["password"];
	$sql = "SELECT * FROM myuser where login='$username' and password='$pwd'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			
			if($row['login'] == $username && $row['password'] == $pwd){
				echo("good");
				}else{
				echo "0";
			}
			
			
			
		}
		} else {
		echo "0";
	}
	
	
	
	
	$conn->close();
	
?>