<?php require_once('inc/connection.php'); ?>
<?php 
	$query = "SELECT CustomerId,CustomerName,Mobile,Address,Email FROM CUSTOMERDETAILS";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		echo mysqli_num_rows($result)."Found";

		$table = '<table>';
		$table = '<tr><th>CustomerID</th><th>CustomerName</th><th>Mobile</th><th>Address</th><th>Email</th><th>Username</th><th>Password</th></tr>' 

		while($record = mysqli_fetch_assoc($result))
		{
			$table .= '<tr>';
			$table .= '<td>' .$record['CustomerId'].</td>;
			$table .= '<td>' .$record['CustomerName'].</td>;
			$table .= '<td>' .$record['Mobile'].</td>;
			$table .= '<td>' .$record['Address'].</td>;
			$table .= '<td>' .$record['Email'].</td>;
			$table .= '</tr>';
		}

	}
?>
