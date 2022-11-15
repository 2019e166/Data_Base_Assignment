<?php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php 
	session_start();
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli($dbhost, $dbuser, $dbpass , $dbname); 
	$loggingEmail = $_SESSION['loggedCustomerEmail'];
	if(isset ($_POST['submitDelete']))
	{
		echo 'cameIn';
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
		{
			$errors[] = 'Username Invalid.';
		}
		if(empty($errors))
		{
			$delete = '1';
			$query = "UPDATE CUSTOMERDETAILS SET ISDELETED = '$delete' WHERE Email = '$loggingEmail' LIMIT 1"; 
			$result = mysqli_query($connection,$query);
		if($result)
			{
					echo 'Successfully deleted.';
					header("Location: index.php");
			}
			else {
				$error[] = 'Query failed.';	
			}
		}
	}
	
?>
<html>
 <head>
 	<style>
 		header{
 			font-family: "times new roman";
 			text-align: center;
 		},
 		table{
 			font-family: "times new roman";
 			text-align: center;

 		},
 		tr,td{
 			font-family: "times new roman";
 			text-align: center;
 		}
 	</style>
 	<title>Delete Customer</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <div class = "panel-body">
	<form action="delete.php" method="post">
		<center>
		<table>
			<tr>
				<td>
					Enter your Email 
				</td>
				<td>
					<input type="text" name="email" placeholder="Enter Email" >
				</td>
			</tr>
			</table>
			<button type="submit" name="submitDelete">Delete Account</button>
			</center>
		</form>
	</div>

</html>
<?php
require_once 'inc/footer.php';
?>