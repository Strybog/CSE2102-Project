<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'gpms');

	// initialize variables
	$uname = "";
	$address = "";
	$pass = "";
	$update = false;

	if (isset($_POST['save'])) {
		$uname = $_POST['uname'];
		$address = $_POST['address'];
		$pass = $_POST['pass'];

		mysqli_query($db, "INSERT INTO users (Username, email, password) VALUES ('$uname', '$address', $pass)"); 
		$_SESSION['message'] = "info saved"; 
		header('location: index.php');
	}