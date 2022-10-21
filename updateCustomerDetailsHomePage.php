<? php require_once(inc/connection.php) ?>
 <html>
 <head>
 	<title>Edit Customer Details.</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <div class = "panel-body">
	<form action="ins/updateCustomerDetails.php" method ="POST">
		<table>
			<tr>
				<td>
					Customer Name 
				</td>
				<td>
					<input type="text" placeholder="Customer Name" name="customerNameUpdate">
				</td>
				<td>
					<input type="text" placeholder="Customer Name Update" name="customerNameUpdate">
				</td>
				<td>
					<button type="submit">Update</button>
				</td>
			</tr>
		</table>
		<button type="submit">Update Details</button>
	</form>
	<p> Back to login page.<a href="registerHome.php"> Back </a></p>
</div>
