<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Tuto/Post_db');
		
	}
	
	function index()
	{
		
		$this->load->view('template/prueba_commentario');
		$this->Post_db->mostrarCont();

		
	}
}
?>