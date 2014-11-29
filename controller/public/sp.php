<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	//searching a userprofile by email id
if($session->is_logged_in()){
if(isset($_GET['id'])){
	$student = Sprofile::find_by_id($_GET['id']);
	if(isset($_GET['del'])==1){
		$student->delete();
		$session->message("Student has been deleted");
		redirect_to('student');
	}
	else{
		if($student){
			$course=Course::find_by_id($student->course_id);
			if($course){
				$cours=$course->name;
				$department=Department::find_by_id($course->department_id);
				if($department){
					$departmente=$department->name;
					$faculty=Faculty::find_by_id($department->faculty_id);
					if($faculty)
							{$fac=$faculty->name;}
							else{$fac="Not Found";}
						}
					else{$departmente="Not Found";
						$fac="Not Found";}
					}
				else
				{$cours='Not Found';
				$fac="Not Found";
				$departmente="Not Found";
				}



		}
	}
}

	include $dir_public.'sp.php';
}
else
{
	redirect_to('login');
}
?>
