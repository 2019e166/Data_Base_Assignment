<?php
require_once 'inc/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src = "img/fitshoesLogo.png" width = "200" height="100"/>

</body>
<header>
	<div>
		<form>
			<label for "TPNumber">+94-112345627</label>
		</form>
	</div>
	<div>
		<form>
			<button type="submit" formaction="index.php">Home</button>
			<button type="submit" formaction="loginHome.php">Login</button>
			<button type="submit" formaction="registerHome.php">Register</button>
		</form>
	</div>
</header>
</html>