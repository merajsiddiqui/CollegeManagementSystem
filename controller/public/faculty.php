<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in())
	{
		if(isset($_GET['id'])){
			$fac_id = $_GET['id'];
			$faculty = Faculty::find_by_id($_GET['id']);
			if($_GET['del']==1){
				$departments=Department::find_all();
				foreach($departments as $department){
					if($department->faculty_id==$fac_id){
						$courses=Course::find_all();
						foreach($courses as $course){
							if($course->department_id==$department->id){
								$subjects=Subject::find_all();
								foreach($subjects as $subject){
									if($subject->course_id==$course->id){
										$subject->delete();
									}	
								}
								$students=Sprofile::find_all();
								foreach($students as $student){
									if($student->course_id==$course->id){
										$student->delete();
									}
								}
								$course->delete();
							}
						}
						$teachers=Tprofile::find_all();
						foreach($teachers as $teacher){
							if($teacher->department_id==$department->id){
								$teacher->delete();
							}
						}
						$department->delete();
					}
				}
					$faculty->delete();
					$session->message("Faculty has been deleted");
					redirect_to('faculty');
			}
		}
	include $dir_public.'faculty.php';
}
else{
	redirect_to('login');
}
?>