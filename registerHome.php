<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<div>
<h3>Register Page</h3>
<p> Already have an account <a href="loginHome.php">Login!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<form >
	<button type="submit" formaction="register.html">Register as customer</button>
	<button type="submit" formaction="registerSellers.php">Register as seller.</button>
</form>
</div>
<? php
require_once 'inc/footer.php';
?>