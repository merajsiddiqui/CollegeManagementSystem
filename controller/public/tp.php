<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';

	//searching a userprofile by email id
	if($session->is_logged_in()){
	if($_GET['id']){
		$teacher  = Tprofile::find_by_id($_GET['id']);
		if(isset($_GET['del'])==1){
		$teacher->delete();
		$session->message("Teacher has been deleted");
		redirect_to('teacher');
	}
	else{
		if($teacher){
			$department=Department::find_by_id($teacher->department_id);
			if($department){
				$departmente= $department->name;
				$faculty = Faculty::find_by_id($department->faculty_id);
				if($faculty){
					$fac=$faculty->name;
				}
				else{
					$fac="Not Found";
				}
			}
			else{
				$departmente="Not Found";
				$fac= "Not Found";
			}
			
		}
	}
	}
	include $dir_public.'tp.php';
}
else
{
	redirect_to('login');
}
?>