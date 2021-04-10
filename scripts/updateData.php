<?php

include 'databaseConnect.php';

	$ID = $_POST['id'];
	$NAME = $_POST['name'];
	$PNO = $_POST['pno'];
	$EMAIL = $_POST['email'];
	$ADDRESS = $_POST['address'];

	$query = "UPDATE userdata SET userName='$NAME', userPhoneNumber='$PNO',
	userEmailId='$EMAIL', userAddress='$ADDRESS' WHERE userId='$ID'";

	mysqli_query($conn,$query);
	
	header("Location: ../index.php");

echo "<br>";

include 'databaseDisconnect.php';

?>