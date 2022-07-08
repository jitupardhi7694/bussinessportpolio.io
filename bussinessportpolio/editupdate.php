<?php

include'connect.php';

if (isset($_POST['update'])) {
	
	$id        = $_GET['id'];
	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$email     = $_POST['email'];
	$pass      = $_POST['password'];
	$conpass   = $_POST['confirmpassword'];
	$number    = $_POST['number'];
	$gender    = $_POST['gender'];
	$city      = $_POST['city'];
	$state     = $_POST['state'];
	$country   = $_POST['country'];
	

	$query = "UPDATE `registration` SET `id`='[$id]',`firstname`='[$firstname]',`lastname`='[$lastname]',`email`='[$email]',`password`='[$pass]',`confirmpassword`='[$conpass]',`number`='[$number]',`gender`='[$gender]',`city`='[$city]',`state`='[$state]',`country`='[$country]' WHERE id=$id";

	$sql = mysqli_query($con,$query);

	if ($sql) {
		header('location:databaseregister.php');

	}
	else{
		header('location:edit.php');
		echo "error found....!!";
	}
}

?>