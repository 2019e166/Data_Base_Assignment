<?php
require_once 'inc/header.php';
?>
<? php
session_start(); 
echo "Welcome" .$_SESSION['loggedCustomerEmail'];#########
require_once('inc/connection.php'); ?>

<html>
	<head>
		<center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selection Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> <!---  --->
		</center>
	</head>
	<div>
		<h2> Select as you wish </h2> 
	</div>
	<style>
		p{
			font-family: "times new roman";
			background-color: #e8f48c;
 			text-align: center;
		},
		button{
		width: 160px;
		height: 18px;
		padding: 100px;
		background-color: #0de2c2;
		color: #ffffff;
		},
		form{
			font-family: "times new roman";
			padding: 10px;

		}

	</style>
	<body>

	<div class="panel-body">
		<center>
		<form action="findItemN.php" method="submit">
			<button type="submit">Find Shoes</button>
		</form>
		<form action="updateCustomerDetailsHomePage.php" method="submit">
			<button type="submit">Update Account Details</button>
		</form>
		<form action="delete.php" method="submit">
			<button type="submit">Delete Account</button>
		</form>
		<form action="readDetails.php" method="submit">
			<button type="submit">Read Account</button>
		</form>
		<p> Back to Home page.<a href="index.php"> Back </a></p>
		<p> Back to Register page.<a href="registerHome.php"> Back </a></p>
		<p> Back to Login page.<a href="loginHome.php"> Back </a></p>
		<img src="img/fitshoesLogo.png" width="200" height="100" />
		</center>
	<!---- --->

</div>
</body>
</html>


<?php
require_once 'inc/footer.php';
?>
