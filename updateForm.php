<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>

<body>
<div>
	<h1 class="jumbotron text-center"><b>UPDATE DATA</b></h1>
	<h3><b>Entered Data will be Updated</b></h3>
</div>

<?php
	include 'scripts/databaseConnect.php';

	$ID = $_GET['id'];

	$query = "SELECT * FROM userdata WHERE userId='$ID'";
	$result = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_array($result)) {
		$ID = $_GET['id'];
		$NAME = $row['userName'];
		$PNO = $row['userPhoneNumber'];
		$EMAIL = $row['userEmailId'];
		$ADDRESS = $row['userAddress'];
	}

?>

<div>
	<form action="scripts/validateData.php" method="post">

	<input type="hidden" name="id" value="<?php echo $ID ?>">

	<label><kbd>Name:</kbd></label>
	<input type="text" class="form-control" name="name" placeholder="Enter Name Here." required="true" value="<?php echo $NAME ?>"><br>

	<label><kbd>Phone Number:</kbd></label>
	<input type="text" class="form-control" name="pno" placeholder="Enter Phone Number Here." required="true" value="<?php echo $PNO ?>"><br>

	<label><kbd>Email ID:</kbd></label>
	<input type="email" class="form-control" name="email" placeholder="Enter Email Here." required="true" value="<?php echo $EMAIL ?>"><br>

	<label><kbd>Address:</kbd></label>
	<input type="text" class="form-control" name="address" placeholder="Enter Address Here." required="true" value="<?php echo $ADDRESS ?>"><br>

	<button type="submit" name="update" value="update" class="btn btn-outline-success btn-sm">Update</button>

</form><br>

<a href="index.php"><button type="submit" class="btn btn-outline-primary btn-sm">HOME</button></a>

</body>
<html>