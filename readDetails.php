<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore'); 
	if(isset($_POST['submitLogin']))
	{
		echo 'Submit';
		$errors = array();
		if(!isset($_POST['EmailRead'])||strlen(trim($_POST['EmailRead']))<1)
		{
			echo 'submit1';
			$errors[] = 'Username Invalid.';
		}
		if(empty($errors))
		{
			$email = mysqli_real_escape_string($connection,$_POST['EmailRead']);
			$query = "SELECT CustomerID,CustomerName,Mobile,Address,Email FROM CUSTOMERDETAILS WHERE Email = '{email}' LIMIT 1";
			$result = mysqli_query($connection,$query);
		}
	if($result)
	{
		echo 'Hiiiiii I M IN';
		
	}
}
?>
<html>
	<div class = "panel-body">
				<form action="readDetails.php" method ="POST">
					<div class = "form-group">
						<label for = "Enter Email : ">Customer Email</label>
						<input type="text" class="form-control" id="Email" name="EmailRead" />
					</div>
					<button type="submit" name="submitLogin">Find Details</button>
				</form>
	</div>
</html>
<?php
require_once 'inc/footer.php';
?>