<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('contacts');
		$this->lang->load('template/menu');
		$this->lang->load('template/login');
		$this->lang->load('template/planes');
		$this->lang->load('template/footer');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('contacts_index');
		$this->load->view('template/footer');
		$this->load->view('template/script');

		//Validar
		//$config = array(
		//  array('field' => 'username','label' => 'Usuario','rules' => 'required|min_length[5]|max_length[12]'),
		//  array('field' => 'password','label' => 'Contraseña','rules' => 'trim|required|matches[passconf]|md5'),
		//  array('field' => 'passconf','label' => 'Confirmar Contraseña','rules' => 'required'),
		//  array('field' => 'email','label' => 'Email','rules' => 'required|valid_email')
		//);
		//$this->form_validation->set_rules($config);
	}

	public function send($email='',$nombre='',$asunto='',$mensaje=''){
		//configuraciones
		$config = array ('validate ' => 'TRUE','mailtype' => 'html','charset' => 'utf-8','priority' => '1','protocol' => 'sendmail');

		//libreria
		$this->load->library('email',$config);

		$this->email->from($email, $nombre);
		$this->email->to('direction@altiviaot.com');
		$this->email->subject($asunto);
		$this->email->message($mensaje);
		if ( ! $this->email->send())
		{

		}
		echo $this->email->print_debugger();

		redirect('contacts', 'location');
	}
}