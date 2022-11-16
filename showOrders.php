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

	$queryGetID = "SELECT CustomerID FROM customerDetails WHERE Email = '$loggingEmail' LIMIT 1";
        $resu = mysqli_query($connection,$queryGetID);
        $userrecord = mysqli_fetch_assoc($resu);

        $customerID = $userrecord['CustomerID'];
	// $sqlCartShow = "SELECT OrderID, ProductID,Type,Description FROM ORDERDETAILS WHERE CustomerID = '$customerID'";

	// $resuGetCart = mysqli_query($connection,$sqlCartShow);
	// $userCart = mysqli_fetch_assoc($resuGetCart);

	// $orderIDSet=$userCart['OrderID']; 
	// $productIDset = $userCart['ProductID'];
	// $typeset = $userCart['Type'];
	// $descriptionset = $userCart['Description'];

     $sqlCartShow = "SELECT ORDERDETAILS.OrderID, ORDERDETAILS.CustomerID, ORDERDETAILS.ProductID, ORDERDETAILS.Date, ORDERDETAILS.Type, ORDERDETAILS.Description,customerdetails.CustomerName FROM ORDERDETAILS JOIN customerdetails WHERE ORDERDETAILS.CustomerID = '$customerID' AND customerdetails.CustomerID = '$customerID'";

	$resuGetCart = mysqli_query($connection,$sqlCartShow);
	$table = '<table>';
	$table .= '<tr><th>Order Number</th>,<th>Customer ID</th>,<th>Customer Name</th>,<th>Product ID</th>,<th>Date</th>,<th>Type</th>,<th>Description</th>';
	// $getName = mysqli_fetch_assoc($resultname);
	while($userCart = mysqli_fetch_assoc($resuGetCart))
	{
		
		$table .= '<tr>';
		$table .= '<td>' .$userCart['OrderID'].'</td>';
		$table .= '<td>' .$userCart['CustomerID'].'</td>';
		$table .= '<td>' .$userCart['CustomerName'].'</td>';
		$table .= '<td>' .$userCart['ProductID'].'</td>';
		$table .= '<td>' .$userCart['Date'].'</td>';
		$table .= '<td>' .$userCart['Type'].'</td>';
		$table .= '<td>' .$userCart['Description'].'</td>';
		$table .= '</tr>';
	}
	$table .= '</table>';
	// #edittt
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
			<h3> My Cart </h3>
			<?php echo $table; ?>
</center>
</body>
</html>
<!-- <?php
require_once 'inc/footer.php';
?> -->
