<?php 


function get_title(){
	echo 'Log In';
}

function display_content(){
	// session_start();

	// global $users;

	// if(isset($_POST['login'])){
	// 		$username = $_POST['usernameLogin'];
	// 		$password = $_POST['passwordLogin'];
	// 		foreach ($users as $user) {
	// 			if($username == $user['username'] && $password == $user['password'])
	// 			{
					
	// 			 	// header('location:home.php');
	// 			}
	// 		}
	// 	}
	login_session();
?>
	<div class='row'>
	<div class='col-sm-12 col-md-6'>
	<form method='POST'>
	<div class='form-group'>
			<label for='usernameLogin'>Username:</label>
			<input type='text' class='form-control'id='usernameLogin' name='usernameLogin' placeholder='Username'>
			</div>
			<div class='form-group'>
			<label for='passwordLogin'>Password:</label>
			<input type='password' class='form-control' id='passwordLogin' name='passwordLogin' placeholder='Password'>
			</div>
			<p>Forgot Password?<a href='change_passwor'> Click Here!</a></p>
			<p>Don't have an account yet?<a href=register.php> Sign Up Here!</a><p>
			<input class='btn btn-primary' type='submit' name='login' value='Log In'>
		</form>
		</div>
		<div class='col-sm-12 col-md-6' id='logImage'>
			<img class='artichokes' src='img/artichokes.png'>
		</div>
	</div>

<?php
}

require_once 'index.php';

?>