


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="http://localhost/Blog/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/Blog/assets/css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>

</body>
</html>

<?php 

/**
* 
*/
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
		$this->load->view('main_blog');

	}


	
	function m()
	{
		
		$query = $this->db->query("select * from Comentario");

      
		    foreach($query->result() as $row)
		    {
		        if (isset($row))
		        {
		                echo $row->id;
		                echo $row->fecha_com;
		                echo $row->contenido;
		                echo "<br>";
		        }
		    
		    } 

		
	}



	function eliminar()
	{
		
		$this->load->view('main_blog');
		$this->load->view('op_eliminar');
	}

	function displayUname()
	{

		$username = $this->input->post('type_uid');        
        $u = $this->db->query("select * from Users where username = '$username'");
        $rew = $u->result();
        if( !is_null($rew) )
        {
            return $rew;
        }
        else
        {
            echo('Fail');
        }

	}

	function uname()
	{
		$username = $this->input->post('type_uid');
		$this->db->where('username', $username);
		$r = $this->db->get('Users');
		if($r->result() == '')
		{
			echo "Faile";
		}

		else
		{
			echo "Success";
		}
		
		
	}

	function comentar()

	{
		$comentario = $this->input->post('');
		$uid = $this->input->post();
	}



	function comment()
	{
		$this->load->model('Post_db');
		$this->Post_db->insertComment();
		$this->load->view('');
		
	}	

	


	/**function comment()
	{
		$id = $this->input->post('type_uid');
		$fecha_com = $this->input->post('myDate');
		$name = 'Carlos';	
		$contenido = $this->input->post('coment');
		$this->db->where(array('id' => $id, 'fecha_com' => $fecha_com, 'username' => $name, 'contenido' => $contenido));
		$query = $this->db->get('Comentario');
		if($query->result() != NULL)
		{
			foreach ($query->result() as $row)
			{
			        echo $row->id;
			        echo $row->fecha_com;
			        echo $row->username;
			        echo $row->contenido;
			}
		}

		else{
			echo "Fracaso";
		}

			
	}	**/
		
}


?>


