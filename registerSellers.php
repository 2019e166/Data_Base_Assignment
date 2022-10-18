<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<div>
<h3>Register for Sellers.</h3>
<p> No Account <a href="register.html">Register Now for customers!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<p> Already have an account <a href="loginHome.php">Login!</a></p>
<form action="" method="post">
	<input type="text" name="Username" placeholder="UserName">
	<input type="password" name="password" placeholder="Password">
	<button type="submit">Login</button>
</form>
<p> Back to registration home page. <a href="registerHome.php"> Back </a></p>
</div>
<?php
require_once 'inc/footer.php';
?>