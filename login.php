<?php session_start(); ?>
<? php require_once('inc/connection.php'); 
?>
<?php
require_once 'inc/header.php';
?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
	if(isset($_POST['submitLogin']))
	{
		$errors = array();
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
		{
			echo 'Invalid User';
			$errors[] = 'Username Invalid.';
		}
		if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1)
		{
			echo 'Invalid Password.';
			$errors[] = 'Password Invalid.';
		}
		if(empty($errors))
		{
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hashedPassword = sha1($password);

			$query = "SELECT Email FROM customerDetails WHERE Email = '{$email}' LIMIT 1";
			#$query = "SELECT Email FROM customerDetails WHERE Email = '{$email}' AND Password = '$hashedPassword' LIMIT 1";

			$result = mysqli_query($connection,$query);

			if($result)
			{
				if(mysqli_num_rows($result) == 1)
				{
					$user = mysqli_fetch_assoc($result);
					$_SESSION['loggedCustomerEmail'] = $user['Email']; //Session variable.
					$GLOBALS['loggedCustomerEmail'] = $user['Email'];
					header('Location: loginSelectionPage.php');

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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>
		<h3>Log In</h3>
		<p> No Account <a href="registerHome.php">Register Now!</a></p>
		<p> Return to Home Page <a href="index.php">Home Page</a></p>
		<form action="login.php" method="post">
			<input type="text" name="email" id = "" placeholder="Email">
			<input type="password" name="password" id = "" placeholder="Password">
			<button type="submit" name="submitLogin">Login</button>
		</form>
	</div>
</body>
</html>
<?php
require_once 'inc/footer.php';
?>