<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in()){
	$admin = Admin::find_all();
	include $dir_public.'student.php';
}
else
{
	redirect_to('login');
}
	?>
