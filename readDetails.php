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
	$sqlSelect = "SELECT Customername, Mobile, Email, Address, Username FROM customerDetails WHERE Email = '$loggingEmail' LIMIT 1";
	$resultselect = mysqli_query($connection,$sqlSelect);
	$customernameDataBase = '';
	$mobileDataBase = '';
	$addressDataBase = '';
	$emailDataBase = '';
	$usernameDataBase = '';

	if($resultselect)
	{
		$resultselectans = mysqli_fetch_assoc($resultselect);
		$customernameDataBase = $resultselectans['Customername'];
		$mobileDataBase = $resultselectans['Mobile'];
		$addressDataBase = $resultselectans['Address'];
		$emailDataBase = $resultselectans['Email'];
		$usernameDataBase = $resultselectans['Username'];

	}
	else
	{
		header('Could not found..');
	}
?>

<html>
<center>
 <head>
 	<title>New Customer Details.</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <div class = "panel-body">
	<form>
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
		<table>
			<tr>
				<td>
					 Customer Name 
				</td>
				<td>
					<input type="text" name="customerNameUpdate" <?php echo 'value="' .$customernameDataBase . '"'; ?>>
				</td>
			</tr>
			<tr>
				<td>
					 Mobile 
				</td>
				<td>
					<input type="text" name="mobileDataBase" <?php echo 'value="' .$mobileDataBase . '"'; ?>>
				</td>
			</tr>
			<tr>
				<td>
					 Address 
				</td>
				<td>
					<input type="text" name="addressDataBase" <?php echo 'value="' .$addressDataBase . '"'; ?>>
				</td>
			</tr>
			<tr>
				<td>
					 Email 
				</td>
				<td>
					<input type="text" name="addressDataBase" <?php echo 'value="' .$emailDataBase . '"'; ?>>
				</td>
			</tr>
			<tr>
				<td>
					 UserName 
				</td>
				<td>
					<input type="text" name="usernameDataBase" <?php echo 'value="' .$usernameDataBase . '"'; ?>>
				</td>
			</tr>
		</table>
	</form>
	<img src="img/fitshoesLogo.png" width="200" height="100" />
	<p> Back to login selection page.<a href="loginSelectionPage.php"> Login Selection Page</a></p>
	<p> Back to login page.<a href="registerHome.php"> Back </a></p>
</div>
</center>
</html>
