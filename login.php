<?php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
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
		<form action="indexlogin.php" method="post">
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