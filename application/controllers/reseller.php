<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('home');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes1');
		$this->lang->load('template\footer');

		//Query's
		$this->db->select('id,nombre,discoduro,transferencia,cuentas,precio');
		$this->db->where('estado',1);
		$data2['query'] = $this->db->get('planes_reseller');

		$this->db->select('nombre');
		$this->db->where('estado',1);
		$data['query'] = $this->db->get('dominios');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('template/planes3',$data2);
		$this->load->view('reseller_index',$data);
		$this->load->view('template/footer');
		$this->load->view('template/script');
	}

	public function show_plans($index = ''){
		if ($index != '') {
			//Idiomas
			$this->lang->load('home');
			$this->lang->load('template\menu');
			$this->lang->load('template\login');
			$this->lang->load('template\planes1');
			$this->lang->load('template\footer');

			//Query's
			$this->db->select('nombre,discoduro,transferencia,cuentas,precio');
			$this->db->where('estado',1);
			$this->db->where('nombre',$index);
			$data['query'] = $this->db->get('planes_reseller');

			$this->db->select('nombre,precio');
			$this->db->where('estado',1);
			$data2['query'] = $this->db->get('planes_reseller');

			//Vistas
			$this->load->view('template/header');
			$this->load->view('template/lang');
			$this->load->view('template/login');
			$this->load->view('template/menu');
			$this->load->view('template/planes4',$data2);
			$this->load->view('reseller_show',$data);
			$this->load->view('template/footer');
			$this->load->view('template/script');
		}else{
			show_404(); //Error, pagina no encontrada
		}
	}
}