<?php session_start(); ?>
<?php

include '../database/env.php';
if(isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($email == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='Login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM admins WHERE email='$email' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['email'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: admin.php');			
		}
	}
} else {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="public/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="public/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="public/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="public/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="public/img/favicon.ico">
 
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>PhotoFolio</h1>
                  </div>
                
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                <form  method="post" action="" class="form-validate">
          
                    <div class="form-group">
                      <input  type="email" name="email"  class="input-material">
                      <label for="" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input  type="password" name="password" class="input-material">
                      <label for="" class="label-material">Password</label>  </div>
                 <input type="submit" name="submit" value="Submit" class="btn btn-primary"></input>
              </form>
              <?php
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
         <p>2024 &copy; </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="public/vendor/chart.js/Chart.min.js"></script>
    <script src="public/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="public/js/front.js"></script>
  </body>
</html>