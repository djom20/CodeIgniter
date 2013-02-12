<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//$this->load->helper('language');
		//$this->lang->load('home');
		$this->load->database();
		$data['query']= $this->db->query('SELECT nombre FROM dominios WHERE estado = 1');

		//modulo del head
		$this->load->library('MyHead');
		$head = new MyHead;
		$data['head'] = $head->show_head();

		//modulo del Lenguaje
		$this->load->library('MyLang');
		$lang = new MyLang;
		$data['lang'] = $lang->show_changelang();

		//modulo del login
		$this->load->library('MyLogin');
		$login = new MyLogin;
		$data['login'] = $login->show_login();

		//modulo del menu
		$this->load->library('MyMenu');
		$menu = new MyMenu;
		$data['menu'] = $menu->show_menu();

		//modulo del slide
		$this->load->library('MySlide');
		$slide = new MySlide;
		$data['slide'] = $slide->show_slide();

		//modulo de los planes1
		$this->load->library('MyPlans1');
		$plans = new MyPlans1;
		$data['plans'] = $plans->show_plans();

		//modulo del footer
		$this->load->library('MyFooter');
		$footer = new MyFooter;
		$data['footer'] = $footer->show_footer();

		//modulo de los scripts
		$this->load->library('MyScript');
		$script = new MyScript;
		$data['script'] = $script->show_script();

		//detalles de la website
		$data['webtitle'] = 'Book Collection';
		$data['websubtitle'] = 'We collect all title of books on the world';
		$data['webfooter'] = '© copyright by step by step php tutorial';

		$this->load->view('home_index',$data);
	}
}