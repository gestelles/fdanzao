<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	/*
	$this->lang->load('text', 'spanish');
	$this->load->helper('language');
	echo lang('hola');
	*/
	
	/*
	$this->load->spark('example-spark/1.0.0'); # Don't forget to add the version!
	$this->load->spark('oauth2/0.3.1'); # Don't forget to add the version!
	
	$this->example_spark->printHello(); # echo's "Hello from the example spark!"
	
	$this->load->spark('menu/1.0.0');
	$nav = array();
	$nav['profile'] = 'Profile';
	$nav['group'] = array('label' => 'Group');
	$nav['battles'] = array('label' => 'Battles');

	$nav['products'] = 'Products';
	$nav['products/X3000'] = array('label' => 'X3000', 'parent_id' => 'products');

	$active = 'about/history';
	$menu = $this->menu->render($nav, $active, NULL, 'basic');

	echo $menu;
	
	*/
	$this->load->helper(array('form'));	
	$data["header"] = 'headerH';
	$data['pagina'] = 'home';
	$this->load->view('layout',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */