<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';

		
		if($session->is_logged_in()){

		if (!empty($_GET['task'])) {
		$session->logout();
		$session->message("You are successfully Logged Out, LogIn to Continue..");
		redirect_to('login');
		}
		include $dir_public.'home.php';
		
		}
		else{
			redirect_to('login');
		}
		

	
?>