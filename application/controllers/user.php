<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function login($user_name,$user_pass,$email){
		$newdata = array(
			'username'  => $user_name,
			'email'     => $user_name,
			'logged_in' => TRUE
		);
		$this->session->set_userdata($newdata);
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function register(){

	}

	public function update(){

	}
}