<? php require_once('inc/connection.php'); ?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore'); 
	$email = mysqli_real_escape_string($connection,$_POST['EmailRead']);
	$isdelete = 0;
	$query = "SELECT CustomerID,CustomerName,Mobile,Address,Email FROM CUSTOMERDETAILS WHERE (Email = '{email}' AND IsDeleted = '{$isdelete}') LIMIT 1";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		echo mysqli_num_rows($result)."Found";
		echo mysqli_real_escape_string($connection,$_POST['CustomerName']);
	}
?>
