<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	//searching a userprofile by email id
	if(isset($_GET['ssearch'])){
		$student = Sprofile::find_by_email($_GET['semail']);
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
		else{
			$session->message('That Email ID is not related to any Student');
			redirect_to('public_home');
		}
	}

	include $dir_public.'sprofile.php';
?>