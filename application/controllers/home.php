<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('home');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes');
		$this->lang->load('template\footer');

		//Query's
		//$this->db->select('nombre');
		//$this->db->where('estado',1);
		//$data['query'] = $this->db->get('dominios');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('template/slide');
		$this->load->view('home_index');
		$this->load->view('template/footer');
		$this->load->view('template/script');
	}
}