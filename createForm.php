<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>

<body>
<div>
	<h1 class="jumbotron text-center"><b>CREATE DATA</b></h1>
	<h3><b>Entered Data will be Created.</b></h3>
</div>

<div>
	<form action="scripts/validateData.php" method="post">

		<label><kbd>Name:</kbd></label>
		<input type="text" class="form-control" name="name" placeholder="Enter Name Here." required="true"><br>

		<label><kbd>Phone Number:</kbd></label>
		<input type="text" class="form-control" name="pno" placeholder="Enter Phone Number Here." required="true"><br>

		<label><kbd>Email ID:</kbd></label>
		<input type="email" class="form-control" name="email" placeholder="Enter Email Here." required="true"><br>

		<label><kbd>Address:</kbd></label>
		<input type="text" class="form-control" name="address" placeholder="Enter Address Here." required="true"><br>

		<button type="submit" name="create" value="create" class="btn btn-outline-success btn-sm">Create</button>
		<button type="reset" class="btn btn-outline-warning btn-sm">Reset</button>

	</form><br>

<a href="index.php"><button type="submit" class="btn btn-outline-primary btn-sm">HOME</button></a>

</body>
<html>