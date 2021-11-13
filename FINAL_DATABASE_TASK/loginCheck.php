<?php 
	session_start();
	require_once('usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$status = validate($username, $password);
				
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location:home.php');
				}else{
					header('location:login.html');
				}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>