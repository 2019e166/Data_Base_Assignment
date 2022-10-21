<?php 
$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
	if(isset($_POST['submitLogin']))
	{
		echo 'Submit';
		$errors = array();
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
		{
			echo 'submit1';
			$errors[] = 'Username Invalid.';
		}
		if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1)
		{
			echo 'submit2';
			$errors[] = 'Password Invalid.';
		}
		if(empty($errors))
		{
			echo 'error empty.';
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hashedPassword = sha1($password);

			$query = "SELECT Email,Password FROM customerDetails WHERE Email = '{$email}' LIMIT 1";

			$result = mysqli_query($connection,$query);

			if($result)
			{
				if(mysqli_num_rows($result) == 1)
				{
					$customerQuery = "SELECT CustomerID,CustomerName,Mobile,Address,Email,Password FROM customerDetails WHERE Email = '{$email}' LIMIT 1";
					$GLOBALS['logedCustomerID'] = "SELECT CustomerID FROM customerDetails WHERE Email = '{$email}' LIMIT 1";
					header('loginSelectionPage.php');

				}
				else
				{
					$errors[] = 'Invalid username or password';
				}
			}
			else {
				$error[] = 'Query failed.';	
			}

		}
	}
?>
