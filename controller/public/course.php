<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in())
	{
		if(isset($_GET['id'])){
	$course = Course::find_by_id($_GET['id']);
	$course_id = $_GET['id'];
	if($_GET['del']==1){
		$subjects=Subject::find_all();
			foreach($subjects as $subject){
				if($subject->course_id==$course_id){
					$subject->delete();
				}	
			}
			$students=Sprofile::find_all();
				foreach($students as $student){
					if($student->course_id==$course_id){
						$student->delete();
					}
				}
		$course->delete();
		$session->message("Course has been deleted");
		redirect_to('course');
	}
}
	include $dir_public.'course.php';
}
else{
	redirect_to('login');
}
	?>