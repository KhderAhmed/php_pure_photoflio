<!DOCTYPE html>
<html>

<head>
	<title>PhotoFolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<?php
	include '../database/env.php';

	if (isset($_POST['send'])) {
		$email = $_POST['email'];
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if ($user == "" || $pass == ""  || $email == "") {
			echo "All fields should be filled. Either one or many fields are empty.";
			echo "<br/>";
			echo "<a href='register.php'>Go back</a>";
		} else {
			mysqli_query($mysqli, "INSERT INTO users(email, username, password) VALUES( '$email', '$user', md5('$pass'))")
				or die("Could not execute the insert query.");

			echo "Registration successfully";
			echo "<br/>";
			echo "<a href='login.php'>Login</a>";
		}
	} else {
		?>
		<form method="post">

			<div class=" input-group">
				<label>Username</label>
				<input type="text" id="username" name="username">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" id="email" name="email">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" id="password" name="password">
			</div>

			<div class="input-group">
				<button type="submit" name="send" class="btn">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
		<div>

			<?php
	}
	?>
	</div>

</body>

</html>