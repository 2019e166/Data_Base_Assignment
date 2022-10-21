<? php require_once ('inc/connection.php');?>
<?php 


	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); //Database server, databse username, database password, name of database


	// Checking the connection
	if (mysqli_connect_errno()) {
	
		die('Database connection failed ' . mysqli_connect_error());
	}
	else
	{
		echo "Connection successful.";
		$customername = mysqli_real_escape_string($connection,$_POST['customerName']);
		$mobile = mysqli_real_escape_string($connection,$_POST['Mobile']);
		$address = mysqli_real_escape_string($connection,$_POST['Address']);
		$email = mysqli_real_escape_string($connection,$_POST['Email']);
		$username = mysqli_real_escape_string($connection,$_POST['Username']);
		$password = mysqli_real_escape_string($connection,$_POST['Password']);
		$isdelete = 0;
		$hashedPassword = sha1($password);

		$sql = "INSERT INTO customerDetails(CustomerName,Mobile,Address,Email,Username,Password,IsDeleted) VALUES ('{$customername}','{$mobile}','{$address}','{$email}','{$username}','{$hashedPassword}',{$isdelete})";

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