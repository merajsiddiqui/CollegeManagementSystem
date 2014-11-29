<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';
	//searching a userprofile by email id
	if($_GET['id']){
		$teacher  = Tprofile::find_by_id($_GET['id']);
		if($teacher){
			$department=Department::find_by_id($teacher->department_id);
			$faculty = Faculty::find_by_id($department->faculty_id);
		}
	}
	include $dir_public.'tprofile.php';
?>