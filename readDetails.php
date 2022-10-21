<? php require_once(inc/connection.php); ?>
<?php
require_once 'inc/header.php';
?>
<html>
	<div class = "panel-body">
				<form action="ins/selectQueryData.php" method ="POST">
					<div class = "form-group">
						<label for = "Enter Email : ">Customer Email</label>
						<input type="text" class="form-control" id="Email" name="EmailRead" />
					</div>
					<button type="submit">Find Details</button>
				</form>
	</div>
</html>
<?php
require_once 'inc/footer.php';
?>