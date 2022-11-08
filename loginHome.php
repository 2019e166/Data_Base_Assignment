<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<div>
<h3>Login Home Page</h3>
<p> No Account <a href="registerHome.php">Register Now!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<form >
	<button type="submit" formaction="login.php">Login as customer</button>
	<button type="submit" formaction="login.php">Login as seller.</button>
</form>
<img src="img/fitshoesLogo.png" width="200" height="100" />
</div>
<? php
require_once 'inc/footer.php';
?>