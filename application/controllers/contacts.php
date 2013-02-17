<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('contacts');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes1');
		$this->lang->load('template\footer');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('contacts_index');
		$this->load->view('template/footer');
		$this->load->view('template/script');
	}
}