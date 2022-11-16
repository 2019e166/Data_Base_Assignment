<? php session_start(); ?>
<? php require_once(inc/connection.php) ?>
<?php
require_once 'inc/header.php';
?>
<?php
	session_start();
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); 
	$loggingEmail = $_SESSION['loggedCustomerEmail'];
	$orderList = '';

	$queryGetID = "SELECT CustomerID FROM customerDetails WHERE Email = '$loggingEmail' LIMIT 1";
        $resu = mysqli_query($connection,$queryGetID);
        $userrecord = mysqli_fetch_assoc($resu);

        $customerID = $userrecord['CustomerID'];
	$sqlCartShow = "SELECT OrderID,CustomerID,ProductID,Date,Type,Description FROM ORDERDETAILS";


	$resuGetCart = mysqli_query($connection,$sqlCartShow);
	$table = "<table>";
	$table .= '<tr><th>Order Number</th>,<th>Customer ID</th>,<th>Product ID</th>,<th>Date</th>,<th>Type</th>,<th>Description</th></tr>';
	while($userCartN = mysqli_fetch_assoc($resuGetCart))
	{
		$table .= '<tr>';
		$table .= '<td>' .$userCartN['OrderID'].'</td>';
		$table .= '<td>' .$userCartN['CustomerID'].'</td>';
		$table .= '<td>' .$userCartN['ProductID'].'</td>';
		$table .= '<td>' .$userCartN['Date'].'</td>';
		$table .= '<td>' .$userCartN['Type'].'</td>';
		$table .= '<td>' .$userCartN['Description'].'</td>';
		$table .= '</tr>';
	}
	$table .= '</table>';
	#edittt
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Cart</title>
</head>
<body>
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
h3{
	font-family: "times new roman";
}

		</style>
		<center>
			<h3>Cart Details</h3>
			<?php echo $table; ?>
</center>
</body>
</html>