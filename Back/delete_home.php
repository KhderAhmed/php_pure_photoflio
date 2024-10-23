<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: Login.php');
}
?>

<?php
//including the database connection file
include '../database/env.php';


//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM homeimage WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:Index_home.php");
?>

