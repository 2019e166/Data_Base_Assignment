<? php require_once('inc/connection.php'); ?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli($dbhost, $dbuser, $dbpass , $dbname); 
	$query = "SELECT CustomerId,CustomerName,Mobile,Address,Email FROM CUSTOMERDETAILS";
	$query = "DELETE FROM CUSTOMERDETAILS WHERE CustomerId = 6 LIMIT 1";
	$result = mysqli_query($connection,$query);
?>
	
