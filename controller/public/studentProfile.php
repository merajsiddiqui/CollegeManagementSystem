<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
// action code
	if($session->is_logged_in()){
	if(isset($_POST['create'])){
		$student = new Sprofile;

		$student->fname = $_POST['fname'];
		$student->lname= $_POST['lname'];
		$student->course_id = $_POST['course'];
		$student->dob = $_POST['dob'];
		$student->gender = $_POST['gender'];
		$student->email = $_POST['email'];
		$student->mobile = $_POST['mobile'];
		$student->address = $_POST['address'];
		$student->telephone = $_POST['telephone'];

		//saving in mysql
		if($student->save()){
			$session->message('Student Profile Created successfully');
			redirect_to('home');
		}
		else{
		$session->message('OOPS some erroroccured.. Try Again');
			redirect_to('home');
		}

	}
	include $dir_public.'studentProfile.php';
}
else{
	redirect_to('login');
}
	?>
