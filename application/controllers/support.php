<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('home');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes1');
		$this->lang->load('template\footer');

		//Query's
		$this->db->select('nombre,precio');
		$this->db->where('estado',1);
		$data2['query'] = $this->db->get('planes_hosting');

		$this->db->select('nombre');
		$this->db->where('estado',1);
		$data['query'] = $this->db->get('dominios');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('template/slogan');
		$this->load->view('template/planes2',$data2);
		$this->load->view('support_index',$data);
		$this->load->view('template/footer');
		$this->load->view('template/script');
	}

	public function faq(){
		//Idiomas
		$this->lang->load('home');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes1');
		$this->lang->load('template\faq');
		$this->lang->load('template\footer');

		//Query's
		$this->db->select('nombre,precio');
		$this->db->where('estado',1);
		$data2['query'] = $this->db->get('planes_hosting');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('template/slogan');
		$this->load->view('template/planes2',$data2);
		$this->load->view('support_faq');
		$this->load->view('template/footer');
		$this->load->view('template/script');
	}
}