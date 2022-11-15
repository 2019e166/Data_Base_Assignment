<? php session_start(); ?>
<? php require_once(inc/connection.php) ?>
<?php
	session_start();
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); 
	$loggingEmail = $_SESSION['loggedCustomerEmail'];
	$sqlSelect = "SELECT Customername, Mobile, Address, Username FROM customerDetails WHERE Email = '$loggingEmail' LIMIT 1";
	$resultselect = mysqli_query($connection,$sqlSelect);
	$customernameDataBase = '';
	$mobileDataBase = '';
	$addressDataBase = '';
	$usernameDataBase = '';

	if($resultselect)
	{
		$resultselectans = mysqli_fetch_assoc($resultselect);
		$customernameDataBase = $resultselectans['Customername'];
		$mobileDataBase = $resultselectans['Mobile'];
		$addressDataBase = $resultselectans['Address'];
		$usernameDataBase = $resultselectans['Username'];

	}
	else
	{
		header('Could not found..');
	}
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
		

		$sql = "UPDATE CUSTOMERDETAILS SET CustomerName='{$customername}' ,Mobile='{$mobile}',Address='{$address}',Username='{$username}',Password='{$hashedPassword}' WHERE Email = '$loggingEmail' LIMIT 1";

		$result =mysqli_query($connection,$sql);

		header('Location: readDetails.php');

		if(!$result)
		{
			echo "Fail";
		}
	}
?>
 <html>
 <head>
 	<title>Edit Customer Details.</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <style>
			.table{
	border-collapse: collapse;
	width: 80%;
	margin: 50px auto;
}

td,th{
	border: 3px solid gray;
	padding: 10px;
	font-family: "times new roman";
}

p{
	font-family: "times new roman";
}

tr,td: nth-child(2)
{
	text-align: center;
}

		</style>
 <div class = "panel-body">
	<form action="updateCustomerDetailsHomePage.php" method ="POST">
		<center>
		<table>
			<tr>
				<td>
					Customer Name 
				</td>
				<td>
					<input type="text" name="customerNameUpdate" <?php echo 'value="' .$customernameDataBase . '"'; ?>>
				</td>
				<td>
					<input type="text" placeholder="Customer New Name" name="customerNameUpdate">
				</td>
			</tr>
			<tr>
				<td>
					Mobile 
				</td>
				<td>
					<input type="text" name="mobileDataBase" <?php echo 'value="' .$mobileDataBase . '"'; ?>>
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
					<input type="text" name="addressDataBase" <?php echo 'value="' .$addressDataBase . '"'; ?>>
				</td>
				<td>
					<input type="text" placeholder="Customer New Address" name="AddressUpdate">
				</td>
			</tr>
			<tr>
				<td>
					UserName 
				</td>
				<td>
					<input type="text" name="usernameDataBase" <?php echo 'value="' .$usernameDataBase . '"'; ?>>
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
	</center>
	</form>
	<center>
		<img src="img/fitshoesLogo.png" width="200" height="100" />
		<p> Back to login page.<a href="registerHome.php"> Back </a></p>
	</center>	
</div>
</html>