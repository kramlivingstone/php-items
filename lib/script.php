<?php 

// $users = [
// 		 ['username' => 'admin', 
// 		 'password' => 'password',
// 		 'confirm_pw' => 'password',
// 		 'email' => 'test@yahoo.com.ph',
// 		 'name' => 'admin'],
// 		 ['username' => 'mark',
// 		 'password' => 'marasigan',
// 		 'confirm_pw' => 'marasigan',
// 		 'email' => 'kramlivingstone@yahoo.com.ph',
// 		 'name' => 'Mark Marasigan']
// ];

// $fp = fopen('users.json', 'w');
// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
// fclose($fp);


//Retrieving data from JSON file
$string = file_get_contents('users.json');
$users = json_decode($string, true);

// function display_users($arr) {
// 	foreach ($arr as $val) {
// 		$username = $val['username'];
// 		$email = $val['email'];
// 		$name = $val['name'];

// 	echo "string";
// 	}
// }

if(isset($_POST['add_user'])) {
	$new_user = [];

	$new_user['username'] = $_POST['usernameReg'];
	$new_user['password'] = $_POST['passwordReg'];
	$new_user['confirm_pw'] = $_POST['confirmpasswordReg'];
	$new_user['email'] = $_POST['emailReg'];
	$new_user['name'] = $_POST['nameReg'];

	$users[] = $new_user;

	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
	fclose($fp);
	header('location:login.php');
}

if(isset($_POST['cancel']))
	header('location:login.php');


 ?>