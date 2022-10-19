<? php 

	$customername = $_POST['customerName'];
	$mobile = $_POST['Mobile'];
	$address = $_POST['Address'];
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = new mysqli('localhost', 'root', '', 'onlineshoestore'); //Database server, databse username, database password, name of database


	// Checking the connection
	if (mysqli_connect_errno()) {
	//if ($connection->mysqli_connect_error) {
		die('Database connection failed ' . mysqli_connect_error());
		//die('Connection Faild.'.$connection->mysqli_connect_error);
	}
	else
	{
		echo "Connection successful.";
		mysqli_query($connection,$sql);
		$sql = "INSERT INTO customerDetails(Customer Name,Mobile,Address,Email,Username,Password)values(?,?,?,?,?,?)";
		$stmt = $mysqli->stmt_init();
		if(! $stmt-> prepare($sql)){

		}
		$stmt->bind_param("ssssss",$customername,$mobile,$address,$email,$username,$password);
		$sql->execute();
		echo "Registration successful.";
		$sql->close();
		$connection->close();
	}

?>