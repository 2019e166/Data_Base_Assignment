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
	if(!isset ($_POST['submitDelete']))
	{
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
		{
			$errors[] = 'Username Invalid.';
		}
		if(empty($errors))
		{
			echo hellooooo;
			$query = "DELETE FROM CUSTOMERDETAILS WHERE Email = $loggingEmail LIMIT 1";
			$result = mysqli_query($connection,$query);
		if($result)
			{
				if(mysqli_num_rows($result) == 1)
				{
					echo 'Successfully deleted.';
					header("Location: loginSelectionPage.php");

				}
				else
				{
					$errors[] = 'Invalid username or password';
				}
			}
			else {
				$error[] = 'Query failed.';	
			}
		}
	}
	
?>
<html>
 <head>
 	<title>Delete Customer</title>
 	<link rel="stylesheet" type="text/css" href="css/styleForbutton.css">
 </head>
 <div class = "panel-body">
	<form>
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
		</form>
	</div>
</html>
<?php
require_once 'inc/footer.php';
?>