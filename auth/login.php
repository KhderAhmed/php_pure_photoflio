<?php session_start(); ?>


<!DOCTYPE html>
<html>

<head>
	<title>PhotoFolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	<?php
	include '../database/env.php';

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location:home.php');			
		}
	}
} else {
?>
	<form method="post" action="">



		<div class="input-group">
			<label>Username</label>
			<input id="username" type="text" name="username" class="form-control" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input id="password" type="password" class="form-control" name="password" required>
		</div>
		<div class="input-group">
			<button name="submit" type="submit" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

	<?php
}
?>
</body>

</html>