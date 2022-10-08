<?php
require_once 'inc/header.php';
?>
<div>
<h3>Log In</h3>
<p> No Account <a href="register.php">Register Now!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<form action="" method="post">
	<input type="text" name="Username" placeholder="UserName">
	<input type="password" name="password" placeholder="Password">
	<button type="submit">Login</button>
</form>
</div>
<?php
require_once 'inc/footer.php';
?>