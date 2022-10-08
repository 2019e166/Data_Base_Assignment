<?php
require_once 'inc/header.php';
?>
<div>
<h3>Register</h3>
<p> Already have an account <a href="login.php">Login!</a></p>
<p> Return to Home Page <a href="index.php">Home Page</a></p>
<form action="" method="post">
	<input type="text" name="Customer name" placeholder="Customer Name">
	<input type="text" name="Mobile" placeholder="Mobile">
	<input type="text" name="Address" placeholder="Address">
	<input type="text" name="Email" placeholder="Email">
	<input type="text" name="Username" placeholder="UserName">
	<input type="password" name="password" placeholder="Password">
	<button type="submit">Register</button>
</form>
</div>
<?php
require_once 'inc/footer.php';
?>