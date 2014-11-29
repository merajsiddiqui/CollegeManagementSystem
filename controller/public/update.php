<?php
	ob_start();
	require_once '../../parameters.php';
	require_once $dir_model.'initialize.php';

	//faculty update
	if($session->is_logged_in()){
	if(isset($_POST['fupdate'])){
		$faculty = new Faculty;
		$faculty->name= $_POST['fname'];
		$faculty->dean= $_POST['fdean'];
		$faculty->no_department= $_POST['fnod'];
		if($faculty->save()){
			$session->message('Faculty Created Successfully');	
			redirect_to('update');
		}
		else{
			$session->message('Some error occured.. Try again later ');	
			redirect_to('update');
		}
	}

	//department update
	if(isset($_POST['dupdate'])){
		$department= new Department;
		$department->faculty_id= $_POST['fid'];
		$department->name= $_POST['dname'];
		$department->hod= $_POST['dhod'];
		if($department->save()){
			$session->message('Department Created Successfully');	
			redirect_to('update');
		}
		else{
			$session->message('Some error occured.. Try again later ');	
			redirect_to('update');
		}
	}

	//course update

	if(isset($_POST['cupdate'])){
		$course= new  Course;
		$course->name= $_POST['cname'];
		$course->fee= $_POST['cfee'];
		$course->department_id= $_POST['did'];
		if($course->save()){
			$session->message('Course Created Successfully');	
			redirect_to('update');
		}
		else{
			$session->message('Some error occured.. Try again later ');	
			redirect_to('update');
		}
	}

	//subject update

	if(isset($_POST['supdate'])){
		$subject = new Subject;
		$subject->name= $_POST['sname'];
		$subject->subject_code= $_POST['scode'];
		$subject->course_id= $_POST['cid'];
		if($subject->save()){
			$session->message('Subject Created Successfully');	
			redirect_to('update');
		}
		else{
			$session->message('Some error occured.. Try again later ');	
			redirect_to('update');
		}
	}

	include $dir_public.'update.php';
}
else
{
	redirect_to('login');
}
	?>
