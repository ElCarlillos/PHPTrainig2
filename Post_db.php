<?php 
/**
* MODELO PARA LA VISTA DE COMENTARIOS
*/
class Post_db extends CI_Model
{
	
	function insertComment()	
	{
		$id = $this->input->post('type_uid');
		$fecha_com = $this->input->post('myDate');
		$name = 'Carlos';	
		$contenido = $this->input->post('coment');	
			
		$this->db->insert('Comentario', array('id' => $id, 'fecha_com' => $fecha_com, 'username' => $name,
			'contenido' => $contenido));

		$this->load->view('prueba_commentario');
	}

	function mostrarId()
	{
		$query = $this->db->query("select * from Comentario");

			
		foreach($query->result() as $row)
		{
				if (isset($row))
				{
						#echo ' <input type="text" class="contenido"> ';
		        		echo $cid = $row->id;
		        		echo "<br>";
		        		
				}
		
		}	

	}



	public function mostrarFecha()
	{
		$query = $this->db->query("select * from Comentario");

		foreach($query->result() as $row)
		{	
						
						echo $row->fecha_com.'</div><br>';
		        		echo "<br>";
		}

	}		        		


	public function mostrarCont()
	{
		$query = $this->db->query("select * from Comentario where id%2 != 0");
		$style = 

	'<div style="width:1000px;
	
		>';
		$end = '</div>';

		foreach($query->result() as $row)
		{				
						echo $style.$row->contenido.$end;
						
		        		
		}

	}			      

	public function mostrar2()
	{
		$query = $this->db->query("select * from Comentario where id%2 != 0");
	}  		
}


?>