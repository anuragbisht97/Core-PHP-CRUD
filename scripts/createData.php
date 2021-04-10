<?php

include 'databaseConnect.php';

	$NAME = $_POST['name'];
	$PNO = $_POST['pno'];
	$EMAIL = $_POST['email'];
	$ADDRESS = $_POST['address'];
	
	$query = "INSERT INTO userdata (userName, userPhoneNumber, userEmailId, 
	userAddress) VALUES ('$NAME', '$PNO', '$EMAIL', '$ADDRESS')";
	
	mysqli_query($conn,$query);
	
	header("Location: ../index.php");

include 'databaseDisconnect.php';

?>