<?php
require_once 'inc/connection.php';
?>
<!DOCTYPE html>
<html>
<style>
	header{
		font-family: "times new roman";
	}
	form{
		font-family: "times new roman";
/*        background-color: #76ff7a;*/
	}
	/*button{
		background-color: brown;
	}*/
	
</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<img src = "img/fitshoesLogo.png" width = "200" height="100"/>
	</center>
</body>
<header>
	<div>
		<form>
			<img src="img/logo.png" width="30" height="30"/>
			<img src="img/fblogo.png" width="30" height="30"/>
			<a href="registerHome.php">fitshoes</a>
			<img src="img/instgram.png" width="30" height="30"/>
			<a href="registerHome.php">fitshoes</a>
			<img src="img/whatsaplogo.png" width="30" height="30"/>
			<label for "TPNumber"> +94-792345627</label>
			<img src="img/call.png" width="30" height="30"/>
			<label for "TPNumber"> +94-112345627  +94-11234568</label>
			<img src="img/email.png" width="30" height="30"/>
			<a href="registerHome.php">fitshoecustomerPage@fitshoe.com </a>
		</form>
	</div>
</header>
<header>
	<div>
		<form>
			<center>
				<button type="submit" formaction="index.php">Home</button>
				<button type="submit" formaction="loginHome.php">Login</button>
				<button type="submit" formaction="registerHome.php">Register</button>
				<!-- <button type="submit" formaction="registerHome.php">Register</button> -->
			</center>
		</form>
	</div>
</header>
</html>