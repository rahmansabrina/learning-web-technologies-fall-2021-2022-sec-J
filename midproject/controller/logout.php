<?php 

	session_start();
    setcookie('flag', 'abc', time()-10, '/');
	header('location: ../views/login.php');
?>