<?php

class User{
	private $_db;

	public function __construct(){
		$this->_db	= Database::getInstance();
	}

	public function register_user($fields = array())
	{
		if ( $this->_db->insert('users', $fields) ) return true; else return false;
	}

	public function cek_email($email){
		$data = $this->_db->get_user('users', 'email', $email);
		if ( empty($data) ) return false; else return true;
	}

	public function login_user($email, $password){
		
		$data = $this->_db->get_user('users', 'email', $email);
		//die(print_r($data));	
		if ( password_verify($password, $data['password']) ){

			return $data = $this->_db->get_user('users', 'email', $email);
			return true;
		}else{
			 return false;
		}
	}

	public function is_loggedIn(){
		if ( Session::exists('email') ) return true; else return false;
	}
}

?>