<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
    	parent:: __construct();
    	$this->load->model('user_model');
    }

	public function login($user_name='', $user_pass=''){
		$logged = $this->user_model->isLogged();

		if ($logged){ // en este caso cargamos la vista del usuario
			$this->load->view('principal_view');
		}

		$user_name = $this->input->get_post('username');
		$user_pass = sha1($this->input->get_post('userpass'));

		if ($user_name != ''){
			if ($user_pass != ''){
				//Query's
				$this->db->select('nombre,apellido,correo');
				$data = array('estado' => 1,'online' => 0,'user' => $user_name,'pass' => $user_pass);

				$query = $this->db->get_where('usuarios',$data);
				if($query->row() > 0){
					$row=$query->row();
					$newdata = array('user' => $user_name,'username' => $row->nombre.' '.$row->apellido,'password' => $user_pass,'email' => $row->email,'logged_in' => TRUE);
					$this->session->set_userdata($newdata);
				}else{
					$this->session->set_flashdata('error', 'El usuario o contraseña son incorrectos.');
				}

				redirect('home', 'location');
			}else{ echo 'nose encontro user_pass'; }
		}else{ echo 'nose encontro user_name'; }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home', 'location');
	}

	public function register(){

	}

	public function update(){

	}
}