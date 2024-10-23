<?php 
 
session_start(); ?>
<head>
	<title>PhotoFolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="">

	</div>
	<div id="header" style='color: #27a776;' >

	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include '../database/env.php';		
	
		$result = mysqli_query($mysqli, "SELECT * FROM users");
	?>
				
				<h2 style='color: #27a776;'> <span style='color: #B0C4DE;' ></span><?php echo $_SESSION['username'] ?> 
				
				! <a href='logout.php'>Logout</a><br/>

	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>

