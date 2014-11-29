<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in()){
		if(isset($_GET['id'])){
	$subject = Subject::find_by_id($_GET['id']);
	if($_GET['del']==1){
		$subject->delete();
		$session->message("Subject has been deleted");
		redirect_to('subject');
	}
}
	include $dir_public.'subject.php';
}
else{
	redirect_to('login');
}
	?>
