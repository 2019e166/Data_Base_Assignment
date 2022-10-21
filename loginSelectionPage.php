<? php require_once('inc/connection.php'); ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selection Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<div>
		<h2> Select as you wish </h2> 
	</div>
	<div class="panel-body">
		<form action="findItem.php" method="submit">
			<button type="submit">Find Shoes</button>
		</form>
		<form action="updateCustomerDetailsHomePage.php" method="submit">
			<button type="submit">Update Account Details</button>
		</form>
		<form action="delete.php" method="submit">
			<button type="submit">Delete Account</button>
		</form>
		<form action="registerHome.php" method="submit">
			<button type="submit">Create Account</button>
		</form>
		
	</div>
	</html>