<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	$professor=0;
	if(isset($_POST['psearch'])){
		$did=$_POST['department_id'];
		$plists= Tprofile::find_department($did);
		if ($plists)
			$professor=1;
		else{
			$session->message('Not Found');
			redirect_to('public_home');
		}

	}
	include $dir_public.'public_home.php';
?>