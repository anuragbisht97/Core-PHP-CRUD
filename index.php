<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>

<body>

<div>
	<h1 class="jumbotron text-center"><b>DATABASE PAGE (CRUD)</b></h1>
</div>

<div>
	<?php include 'scripts/databaseConnect.php'; ?>
	<form action="scripts/searchData.php" method="post">
		<label><kbd>User Name:</kbd></label>
		<input type="text" class="form-control" name="name" placeholder="Enter Name to Search Data." required="true"><br>

		<button type="submit" class="btn btn-outline-success btn-sm" name="search" value="search">Search</button>
	</form><br>

	<a href="createForm.php">
		<button type="button" class="btn btn-outline-primary btn-sm">Create Data</button>
	</a>

</div>

<?php
	$query = "SELECT * FROM userdata ORDER BY userId";
	$result = mysqli_query($conn, $query);
?>

<h1 class="jumbotron text-center"><b>COMPLETE DATA</b></h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th><kbd>Operation</kbd></th>
			<th><kbd>User ID</kbd></th>
			<th><kbd>User Name</kbd></th>
			<th><kbd>Phone Number</kbd></th>
			<th><kbd>Email ID</kbd></th>
			<th><kbd>Address</kbd></th>
		</tr>
	</thead>
<tbody>

<?php
while ($row = mysqli_fetch_array($result)) { ?>
	<tr>
		<td>
			<a href="updateForm.php?id=<?php echo $row['userId']; ?>">
			<button type="button" class="btn btn-outline-warning btn-sm">EDIT</button>
			</a>
			
			<a href="scripts/deleteData.php?id=<?php echo $row['userId']; ?>">
			<button type="button" class="btn btn-outline-danger btn-sm">DELETE</button>
			</a>
		</td>
		<td><?php echo $row['userId']; ?></td>
		<td><?php echo $row['userName']; ?></td>
		<td><?php echo $row['userPhoneNumber']; ?></td>
		<td><?php echo $row['userEmailId']; ?></td>
		<td><?php echo $row['userAddress']; ?></td>
	</tr>
<?php } ?>
</tbody>
</table>
	
<?php
	include 'scripts/databaseDisconnect.php';
?>
	
</body>
</html>