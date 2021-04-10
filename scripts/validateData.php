<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/style.css">

	<script>
		function goBack()
		{
			window.history.back();
		}
	</script>
</head>

<body>
	<h1 class="jumbotron text-center"><b>VALIDATION</b></h1>
	<h3><b>Entered Data will be Created/Updated accordingly.</b></h3>

<?php
	$nameErr = $pnoErr = $emailErr = $addressErr = "";
	$name = $pno = $email = $address = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = input_data($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$nameErr = "Only alphabets and white space are allowed.";
		}

		$pno = input_data($_POST["pno"]);
		if (!preg_match ("/^[0-9]*$/", $pno))
		{
			$pnoErr = "Only numeric value is allowed.";
		}
		if (strlen ($pno) != 10)
		{
			$pnoErr = "Phone number must contain 10 digits.";
		}

		$email = input_data($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format.";
		}

		$address = input_data($_POST["address"]);
		{
			if (!preg_match("/^[a-zA-Z0-9 ,]*$/",$address))
			{
				$addressErr = "Only alphabets, numbers, white spaces and comma are allowed.";
			}
		}

	}
	function input_data($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	echo "<br>";
	if($nameErr == "" && $pnoErr == "" && $emailErr == "" && $addressErr == "")
	{
		echo "<h2>Your Input:</h2>";
		echo "<b>Name: </b>" .$name;
		echo "<br>";
		echo "<b>Phone Number: </b>" .$pno;
		echo "<br>";
		echo "<b>Email ID: </b>" .$email;
		echo "<br>";
		echo "<b>Address: </b>" .$address;
		echo "<br>";

		if(isset($_POST['create']))
		{
			$NAME = $_POST['name'];
			$PNO = $_POST['pno'];
			$EMAIL = $_POST['email'];
			$ADDRESS = $_POST['address'];
			?>
			<form action="createData.php" method="post">

				<input type="hidden" name="name" value="<?php echo $NAME ?>">
				<input type="hidden" name="pno" value="<?php echo $PNO ?>">
				<input type="hidden" name="email" value="<?php echo $EMAIL ?>">
				<input type="hidden" name="address" value="<?php echo $ADDRESS ?>">

				<button type="submit" class="btn btn-outline-success">Create</button>

			</form>
			<?php
		}
		elseif(isset($_POST['update']))
		{
			$ID = $_POST['id'];
			$NAME = $_POST['name'];
			$PNO = $_POST['pno'];
			$EMAIL = $_POST['email'];
			$ADDRESS = $_POST['address'];
			?>
			<form action="updateData.php" method="post">

				<input type="hidden" name="id" value="<?php echo $ID ?>">
				<input type="hidden" name="name" value="<?php echo $NAME ?>">
				<input type="hidden" name="pno" value="<?php echo $PNO ?>">
				<input type="hidden" name="email" value="<?php echo $EMAIL ?>">
				<input type="hidden" name="address" value="<?php echo $ADDRESS ?>">

				<button type="submit" class="btn btn-outline-success">Update</button>

			</form>
			<?php
		}
	}
	else
	{
		echo "<br>";
		echo "<h2>Incorrect Details.</h2>";
		echo "<h2>Correct fields which are provided with the errors.</h2>";
		echo "<b>Name: </b>" .$nameErr;
		echo "<br>";
		echo "<b>Phone Number: </b>" .$pnoErr;
		echo "<br>";
		echo "<b>Email ID: </b>" .$emailErr;
		echo "<br>";
		echo "<b>Address: </b>" .$addressErr;
		echo "<br>";
		echo "<h2>RE-ENTER DATA</h2>";
	}
?>
<br>
	
<button  class="btn btn-outline-primary" onclick="goBack()">BACK to FORM</button>
<a href="../index.php"><button type="submit" class="btn btn-outline-primary">HOME</button></a>

</body>
</html>