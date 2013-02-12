<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hosting extends CI_Controller {

	public function index(){
		$this->load->helper('language');
		$this->lang->load('home');

		//modulo del head
		$this->load->library('MyHead');
		$head = new MyHead;
		$data['head'] = $head->show_head();

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

		//detalles de la website
		$data['webtitle'] = 'Book Collection';
		$data['websubtitle'] = 'We collect all title of books on the world';
		$data['webfooter'] = '© copyright by step by step php tutorial';

		$this->load->view('hosting_index',$data);
	}
}