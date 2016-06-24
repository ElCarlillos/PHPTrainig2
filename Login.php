<?php 
/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	  $uname = $this->input->post('username').br(2);    
    $p = $this->input->post('password').br(2);
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run() === FALSE)
    {
        echo "Please enter your username and password";
        $this->load->view('view1', $data);

    }
    else
    {
      echo "You are logged in";
    }

  	
	}

	public function login()
    {

            
            $this->load->library('form_validation');            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE) {                
                echo validation_errors();
                
            }
            else
            {                
                
                $this->load->model('Tuto/User_model1');
                if($this->User_model1->login($this->input->post('username'),  $this->input->post('password')  )  )
                   {
                        $this->session->set_userdata('username');
                        $this->load->view('main_blog');                      
                   } 
                   else
                   {
                        
                        
                        echo "Error";
                   }
                

            }    
        
    }
}
 ?>