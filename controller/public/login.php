
<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';

	if($session->is_logged_in()){
		if($session->type==2){
			redirect_to('home');
		}
	}
	
	if(isset($_POST['login'])){
		$admin = Admin::authenticate($_POST['email'], md5($_POST['password']));
		if($admin){
		$session->login($admin);
		$_SESSION['name']= $admin->name;
		$_SESSION['password']= $admin->password;
		$_SESSION['email']= $admin->email;
		$session->message("You are succesfully logged in");
		redirect_to('home');
		}
	}
	include $dir_public.'login.php';
?>