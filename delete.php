<?php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php
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
					<input type="text" placeholder="Enter Email" name="email">
				</td>
			</tr>
			</table>
			<button type="submit">Delete Account</button>
			$query = "DELETE FROM CUSTOMERDETAILS WHERE Email = email";
		</form>
	</div>
</html>
?>
<?php
require_once 'inc/footer.php';
?>