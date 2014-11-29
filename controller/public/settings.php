<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	//searching a userprofile by email id
	if($session->is_logged_in()){
	if(isset($_POST['cpass'])){
		$user = Admin::authenticate($_POST['email'], md5($_POST['opass']));
		if($user){
			
			$user->password=md5($_POST['npass']);
			if($user->update()){
				$session->message("Password Successfully changed");
			redirect_to('settings');
			}
		}
		else{
			$session->message("Authenticaton Failed.. Try Again");
			redirect_to('settings');
		}
	}

	if(isset($_POST['cadmin'])){
		$admin = new Admin;
		$admin->name=$_POST['aname'];
		$admin->email=$_POST['aemail'];
		$admin->password=md5($_POST['apass']);
		$admin->auth_type=2;
		$admin->access_token='52e67b7745037915daba73c14b106ddb';
		if($admin->save()){
			$session->message('Admin Created Successfully');
			redirect_to('settings');
		}
	}

	include $dir_public.'settings.php';
}
else
{
	redirect_to('login');
}
?>