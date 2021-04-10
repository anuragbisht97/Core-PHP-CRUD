<?php

include 'databaseConnect.php';
	
	$ID = $_GET['id'];
	$query = "DELETE FROM userdata WHERE userId='$ID'";
	mysqli_query($conn,$query);
	header("Location: ../index.php");

echo "<br>";

include 'databaseDisconnect.php';

?>