<?php
	session_start();

	if(isset($_POST['submit'])){
		$uersid = $_POST['id'];
		$password = $_POST['password'];

		if($id != ""){
			if($password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $userid && trim($user[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: userhome.html');
					}
				}

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>