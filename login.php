<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<div>
<h3>Log In</h3>
<p> No Account <a href="registerHome.php">Register Now!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<form action="" method="post">
	<input type="text" name="Username" placeholder="UserName" required="true">
	<input type="password" name="password" placeholder="Password" required="true">
	<button type="submit">Login</button>
</form>
</div>
<?php
require_once 'inc/footer.php';
?>