<? php session_start(); ?>
<? php require_once(inc/connection.php) ?>
<?php
	session_start();
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); 
	// if (mysqli_connect_errno()) {
	
	// 	die('Database connection failed ' . mysqli_connect_error());
	// }
	// else
	// {
		if(isset($_POST['UpdateDetailsButton']))
		{
		echo "Connection successful.";
		$customername = mysqli_real_escape_string($connection,$_POST['customerNameUpdate']);
		$mobile = mysqli_real_escape_string($connection,$_POST['MobileUpdate']);
		$address = mysqli_real_escape_string($connection,$_POST['AddressUpdate']);
		$email = mysqli_real_escape_string($connection,$_POST['EmailUpdate']);
		$username = mysqli_real_escape_string($connection,$_POST['UsernameUpdate']);
		$password = mysqli_real_escape_string($connection,$_POST['PasswordUpdate']);
		$hashedPassword = sha1($password);
		#$loggingEmail = $_SESSION['loggedCustomerEmail'];
		$loggingEmail = 'tayhawi@slt.com';


		$sql = "UPDATE CUSTOMERDETAILS SET CustomerName='{$customername}'LIMIT 1";
		#$sql .= "WHERE Email = {$_SESSION['loggedCustomerEmail']} LIMIT 1"; 
		$result =mysqli_query($connection,$sql);
		if(!$result)
		{
			echo "Fail";
		}
	}
	else
	{
		echo "Button fail.";
	}
?>
 <html>
 <head>
 	
 	<title>Edit Customer Details.</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <div class = "panel-body">
	<form action="updateCustomerDetailsHomePage.php" method ="POST">
		<table>
			<tr>
				<td>
					Customer Name 
				</td>
				<td>
					
				</td>
				<td>
					<input type="text" placeholder="Customer Name Update" name="customerNameUpdate">
				</td>
			</tr>
			<tr>
				<td>
					Mobile 
				</td>
				<td>
					<input type="text" placeholder="Customer New Mobile" name="MobileUpdate">
				</td>
			</tr>
			<tr>
				<td>
					Address 
				</td>
				<td>
					<input type="text" placeholder="Customer New Address" name="AddressUpdate">
				</td>
			</tr>
			<tr>
				<td>
					Email 
				</td>
				<td>
					<input type="text" placeholder="Customer New Email" name="EmailUpdate">
				</td>
			</tr>
			<tr>
				<td>
					UserName 
				</td>
				<td>
					<input type="text" placeholder="Customer New Username" name="UsernameUpdate">
				</td>
			</tr>
			<tr>
				<td>
					Password 
				</td>
				<td>
					<input type="text" placeholder="Customer New Password" name="PasswordUpdate">
				</td>
			</tr>
		</table>
		<button type="submit" name="UpdateDetailsButton">Update Details</button>
	</form>
	<img src="img/fitshoesLogo.png" width="200" height="100" />
	<p> Back to login page.<a href="registerHome.php"> Back </a></p>
</div>
