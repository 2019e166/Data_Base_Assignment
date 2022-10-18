<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore'); //Database server, databse username, database password, name of database


	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	}
	else
	{
		$name = mysqli_escape_string($connection,$_POST['customername']);
		$mobile = mysqli_escape_string($connection,$_POST['mobile']);
		$address = mysqli_escape_string($connection,$_POST['address']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$username = mysqli_escape_string($connection,$_POST['username']);
		$password = mysqli_escape_string($connection,$_POST['password']);

		$sql = INSERT INTO onlineshoestore(name,mobile,address,email,username,password);
	}

?>