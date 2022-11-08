<? php require_once('inc/connection.php'); ?>
<? php
	session_start();
	$_SESSION['loggedCustomerEmail'] = 'Hiiiiii';
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<? php
		echo "username {$_SESSION['loggedCustomerEmail']}" ;
 ?>
</body>
</html>
