<?php

/**
* Session
*/
class Session {
	private $logged_in;
	public $user_id;
	public $name;
	public $type;
	public $email;
	public $password;
	public $message;

	function __construct() {
		session_start();
		$this->check_message();
		$this->check_login();
		if ($this->logged_in) {
			//check location
		} else {
			//do other
		}
	}

	public function is_logged_in() {
		if($this->logged_in) { return true;}
		else{ return false;}
	}

	public function login($user="") {
		if ($user) {
			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->type = $_SESSION['type'] = $user->auth_type;
			$this->name = $_SESSION['name'] = $user->name;
			$this->email = $_SESSION['email'] = $user->email;
			$this->password = $_SESSION['password'] = $user->password;
			$this->logged_in = true;
		}
	}

	public function logout() {
		unset($_SESSION['user_id']);
		unset($this->user_id);
		unset($this->name);
		unset($this->type);
		$this->logged_in = false;
	}

	public function message($msg="") {
		if (!empty($msg)) {
			$_SESSION['message'] = $msg;
		} else {
			return $this->message;
		}
	}

	private function check_login() {
		if (isset($_SESSION['user_id'])) {
			$this->user_id = $_SESSION['user_id'];
			$this->name = $_SESSION['name'];
			$this->type = $_SESSION['type'];
			$this->logged_in = true;
		} else {
			unset($this->user_id);
			unset($this->name);
			unset($this->type);
			$this->logged_in = false;
		}
	}

	private function check_message() {
		if (isset($_SESSION['message'])) {
			$this->message = $_SESSION['message'];
			unset($_SESSION['message']);
		} else {
			$this->message = "";
		}
		
	}
}

$session = new Session();
$message = $session->message();
?>