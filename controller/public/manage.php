<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in())
	{include $dir_public.'manage.php';}
	else
	{
		redirect_to('login');
	}
	
	?>