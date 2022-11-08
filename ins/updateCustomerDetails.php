<? php require_once(inc/connection.php); ?>
<? php
	session_start();
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
		$loggingEmail = $_SESSION['loggedCustomerEmail'];


		$sql = "UPDATE CUSTOMERDETAILS SET CustomerName='{$customername}',Mobile='{$mobile}',Address='{$address}',Username='{$username}',Password='{$hashedPassword}' WHERE Email = '{$loggingEmail}' AND isDeleted = 0 LIMIT 1";

		echo "Inside";

		$result =mysqli_query($connection,$sql);

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

		echo "Registration successful.";
		$sql->close();
		$connection->close();
	}
?>