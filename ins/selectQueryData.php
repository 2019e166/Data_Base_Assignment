<?php require_once('inc/connection.php'); ?>
<?php 
	$query = "SELECT CustomerId,CustomerName,Mobile,Address,Email FROM CUSTOMERDETAILS";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		echo mysqli_num_rows($result)."Found";

		$table = '<table>';
		$table = '<tr><th>ID</th><th>' 

	}
