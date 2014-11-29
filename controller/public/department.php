<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	if($session->is_logged_in()){
	if(isset($_GET['id'])){
	$department = Department::find_by_id($_GET['id']);
	$dept_id = $_GET['id'];
	if($_GET['del']==1){
		$courses=Course::find_all();
			foreach($courses as $course){
				if($course->department_id==$dept_id){
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
							if($teacher->department_id==$dept_id){
								$teacher->delete();
							}
						}
		$department->delete();
		$session->message("Department has been deleted");
		redirect_to('department');
	}
}
	include $dir_public.'department.php';
}
else{
	redirect_to('login');
}
	?>