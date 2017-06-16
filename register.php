<?php 
require_once 'top.php';
require_once 'lib/script.php';
?>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<form method = "POST">
			<h2>Registration</h2>
			<div class="form-group">
				<label for='nameReg'>Full Name:</label>
				<input type="name" class="form-control" name="nameReg" id="nameReg" placeholder="Full Name">
			</div>
			<div class="form-group">
				<label for='usernameReg'>Username:</label>
				<input type="text" class="form-control" id="usernameReg" name="usernameReg" placeholder="Username">
			</div>
			<div class="form-group">
					<label for='passwordReg'>Password:</label>
					<input type="password" class="form-control" id="passwordReg" name="passwordReg" placeholder="Password">
					<label for='passwordReg'>Confirm Password:</label>
					<input type="password" class="form-control" id="confirmpasswordReg" name="confirmpasswordReg" placeholder="Password">
			</div>	
			<div class="form-group">
				<label for='emailReg'>E-mail Address:</label>
				<input type="email" class="form-control" name="emailReg" id="emailReg" placeholder="E-mail Address">
			</div>
			<input class="btn btn-primary" type="submit" name="add_user" value="Register">
			<input class="btn btn-default" type="submit" name="cancel" value="Cancel">
		</form>
	</div>
	<div class="col-sm-12 col-md-6" id="regImage">
		<img id="vegImage" src="img/artichoke.jpg">
	</div>
</div>


<?php
require_once 'bottom.php';
 ?>