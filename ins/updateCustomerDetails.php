<? php require_once(inc/connection.php); ?>
<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); 
	if (mysqli_connect_errno()) {
	
		die('Database connection failed ' . mysqli_connect_error());
	}
	else
	{
		echo "Connection successful.";
		$customername = mysqli_real_escape_string($connection,$_POST['customerNameUpdate']);
		$mobile = mysqli_real_escape_string($connection,$_POST['MobileUpdate']);
		$address = mysqli_real_escape_string($connection,$_POST['AddressUpdate']);
		$email = mysqli_real_escape_string($connection,$_POST['EmailUpdate']);
		$username = mysqli_real_escape_string($connection,$_POST['UsernameUpdate']);
		$password = mysqli_real_escape_string($connection,$_POST['PasswordUpdate']);
		$hashedPassword = sha1($password);

		$sql = "UPDATE CUSTOMERDETAILS SET (CustomerName,Mobile,Address,Email,Username,Password) VALUES ('{$customername}','{$mobile}','{$address}','{$email}','{$username}','{$hashedPassword}') WHERE Email = '{$email}' AND isDeleted = 1 LIMIT 1";


		$result =mysqli_query($connection,$sql);
		echo "".mysqli_affected_rows($connection);
		if($result)
		{
			echo "Added";
			exit(0);
		}
		else
		{
			echo "error";
			exit(0);
		}
		$sql->execute();
		echo "Registration successful.";
		$sql->close();
		$connection->close();
	}
	?>