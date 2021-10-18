<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['id'] != ""){
			if($_POST['password'] != ""){
				if($_POST['name'] != ""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['id']."|".$_POST['password']."|".$_POST['name']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: userhtml.html');
				}else{
					echo "Invalid name...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid id...";
		}
	}
?>