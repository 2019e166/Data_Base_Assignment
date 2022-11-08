<? php session_start(); ?>
<? php require_once(inc/connection.php) ?>
 <html>
 <head>
 	
 	<title>Edit Customer Details.</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <div class = "panel-body">
	<form action="ins/updateCustomerDetails.php" method ="POST">
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
		<button type="submit">Update Details</button>
	</form>
	<img src="img/fitshoesLogo.png" width="200" height="100" />
	<p> Back to login page.<a href="registerHome.php"> Back </a></p>
</div>
