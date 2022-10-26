<?php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 
	$connection = new mysqli($dbhost, $dbuser, $dbpass , $dbname); 
	if(!isset ($_POST['submitDelete']))
	{
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
		{
			$errors[] = 'Username Invalid.';
		}
		if(empty($errors))
		{
			echo hellooooo;
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$query = "DELETE FROM CUSTOMERDETAILS WHERE Email = '{$email}' LIMIT 1";
			//$isdelete = 0;
			//$query = "UPDATE CUSTOMERDETAILS SET IsDeleted VALUES {$isdelete} WHERE Email = '{$email}' LIMIT 1";
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