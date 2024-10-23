<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin </title>
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
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="admin.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary"></strong><strong>PhotoFolio</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>F</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
        
            <div class="list-inline-item logout">     <a  href="Login.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <!-- <div class="avatar"><img src="public/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div> -->
          <?php
	if(isset($_SESSION['valid'])) {			


    /**
     * mysql_connect is deprecated
     * using mysqli_connect instead
     */
    
    $databaseHost = "localhost";
    $databaseName = "photoflio";
    $databaseUsername = "root";
    $databasePassword = "";
    
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    
 
		$result = mysqli_query($mysqli, "SELECT * FROM admins");
	?>
			
          <div class="title">
            <h1 class="h5"> <?php echo $_SESSION['username'] ?> </h1>
   
          </div>
          <?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='Login.php'>Login</a> ";
	}
	?>
        </div>
        <ul class="list-unstyled">
                <li class="active"><a href="admin.php"> <i class="icon-home"></i>Dashboard </a></li>
                <li class="active"><a href="Index_home.php"> <i class="icon-home"></i>Home </a></li>
                <li class="active"><a href="Index_about.php"> <i class="icon-home"></i>About </a></li>
                <li class="active"><a href="Index_Contactpages.php"> <i class="icon-home"></i>ContactUs </a></li>
                <li class="active"><a href="Index_Contact.php"> <i class="icon-home"></i>Contact </a></li>
                <li class="active"><a href="Index_gallery.php"> <i class="icon-home"></i>Gallery </a></li>
                <li class="active"><a href="Index_user.php"> <i class="icon-home"></i>Customer </a></li> 
             
      </nav>
      <!-- Sidebar Navigation end-->

     