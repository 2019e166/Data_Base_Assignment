<? php require_once(inc/connection.php); ?>
<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); 
	
	$query = "UPDATE CUSTOMERDETAILS SET CustomerName = 'Hirush' WHERE CustomerId = 6";

	$result = mysqli_query($connection,$query);
	if($result)
	{
		//echo mysqli_affected_rows($connection)."UPDATED".;

	}else
	echo "Failed";
	?>