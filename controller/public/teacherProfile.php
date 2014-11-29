<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in()){
	if(isset($_POST['create'])){
		$teacher = new Tprofile;

		$teacher->fname = $_POST['fname'];
		$teacher->lname= $_POST['lname'];
		$teacher->department_id =$_POST['did'];
		$teacher->designation= $_POST['designation'];
		$teacher->qualification = $_POST['qualification'];
		$teacher->email = $_POST['email'];
		$teacher->contact = $_POST['contact'];
		$teacher->address = $_POST['address'];
		$teacher->oroom = $_POST['oroom'];
		$teacher->otelephone = $_POST['otelephone'];

		//saving in mysql
		if($teacher->save()){
			$session->message('teacher Profile Created successfuly');
			redirect_to('home');
		}
		else{
		$session->message('OOPS some erroroccured.. Try Again');
			redirect_to('home');
		}

	}
	include $dir_public.'teacherProfile.php';
}
else
{
	redirect_to('login');
}
	?>
