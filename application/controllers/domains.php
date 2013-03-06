<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Domains extends CI_Controller {

	public function index(){
		//Idiomas
		$this->lang->load('domains');
		$this->lang->load('template\menu');
		$this->lang->load('template\login');
		$this->lang->load('template\planes');
		$this->lang->load('template\footer');

		//Query's
		$this->db->select('nombre');
		$this->db->where('estado',1);
		$data['query'] = $this->db->get('dominios');

		//Vistas
		$this->load->view('template/header');
		$this->load->view('template/lang');
		$this->load->view('template/login');
		$this->load->view('template/menu');
		$this->load->view('template/slogan');
		$this->load->view('domains_index',$data);
		$this->load->view('template/footer');
		$this->load->view('template/script');

		//$this->form_validation->set_rules('title', 'Título', 'required');
		//$this->form_validation->set_rules('text', 'Texto', 'required');
		//if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			//$this->load->view('news/create');
			//$this->load->view('templates/footer');
		//}else{
			//$this->news_model->set_news();
			//$this->load->view('news/success');
		//}
	}

	public function whois(){
		$data['website']=$this->input->post('website', TRUE);
		$data['dominio']=$this->input->post('dominio', TRUE);

		if($data['website']==TRUE){
			$data['website']='true';
		}

		if (!isset($data['website'])){
			show_404();
		}
		if (!isset($data['dominio'])){
			show_404();
		}


		$this->load->view('domains_whois',$data);
		//redirect('/domains/index', 'location');


			//$pagina=$_REQUEST['website'].$_REQUEST['dominio'];

			//if (@fopen('http://www.'.$pagina,'r')){
				//$query='<p class="text-error"><strong>¡Lo Lamentamos! '.$pagina.' ¡ya está registrado!</strong></p><br>';
				//$estado='<span class="label label-important">No disponible</span>';
			//}else{
				//$query='<p class="text-success"><strong>¡Felicidades! '.$pagina.' ¡está disponible!</strong></p><br>';
				//$estado='<span class="label label-success">¡Disponible! Comprar Ahora</span>';
			//}
			//header('location: ../home/?query='.$query.'&pagina='.$pagina.'&estado='.$estado.'&dominio='.$_REQUEST['dominio']);
	}
}