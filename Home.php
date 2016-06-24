<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CONTROLADOR DE LA VISTA DE COMENTARIOS
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
		

		
	}
}
?>