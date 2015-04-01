<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//creamos una clase correspondiente al controlador que hereda del CI_Controller del framework
class Contactos extends CI_Controller {

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
		
		//uso de los helpers de codeigniter
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('M_contactos');
	}

	/**
	 * funcion para cargar el index del controlador
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->load->view("view_home_contactos.php");	
	}

	/**
	 * funcion para listar los contactos de la BD
	 * @return [type] [description]
	 */
	public function listar()
	{
		
		$dataBD = $this->M_contactos->get_datos();

		$data = array('resultado' => $dataBD,);

		$this->load->view('view_list_contactos', $data);
	}

	/**
	 * funcion de testeo
	 * @return [type] [description]
	 */
	public function test()
	{
		//pasar una variable
		$data = array('nombre' => 'juan',);
		$this->load->view('view_test_contactos',  $data);
	}

	/**
	 * funcion que contiene las reglas de validacion de campos del frm
	 * @return [type] [description]
	 */
	private function rules()
	{
		//establecer reglas y validaciones con la class form_validation de codeigniter
		$this->form_validation->set_rules('con_email', 'Correo electrónico', 'required|valid_email');
		$this->form_validation->set_rules('con_nombre', 'Nombre de usuario', 'required|min_length[4]');
		$this->form_validation->set_rules('con_edad', 'Edad', 'required|integer');
		$this->form_validation->set_rules('con_telefono', 'Teléfono', 'required|integer|max_length[7]');
		$this->form_validation->set_rules('con_estatus', 'Estatus', 'required|trim');
	}

	/**
	 * funcion para insertar contactos
	 * @return [type] [description]
	 */
	public function agregar()
	{
		
		if($this->input->post())
		{
			$this->rules();
			if($this->form_validation->run() == true)
			{
				echo '<script type="text/javascript">';
				echo 'console.log("data recibida");';
				echo '</script>';
				$id_Insert = $this->M_contactos->add();
				//echo '<script type="text/javascript">';
				//echo 'alert("Usuario creado e identificado con el ID: '.$id_Insert.'");';
				//echo '</script>';
				echo "Usuario creado e identificado con: ".$id_Insert;
				$this->load->view('view_form_contactos');
			}
			else
			{
				echo '<script type="text/javascript">';
				echo 'alert("Error de validación");';
				echo '</script>';
				$this->load->view('view_form_contactos');
			}
		}
		else
		{
			$this->load->view('view_form_contactos');
		}
	}
	/**
	 * funcion para editar un contacto
	 * @param  [integer] $id [identificador del cliente]
	 * @return [type]     [description]
	 */
	public function editar($id)
	{
		if($id == null or !is_numeric($id)){
			echo "Error data null";
			return;
		}
		else{
			if($this->input->post())
			{
				$this->rules();
				if($this->form_validation->run() == true)
				{
					$this->M_contactos->edit($id);
					redirect('contactos/listar');
				}
				else
				{
					echo '<script type="text/javascript">';
					echo 'alert("Error de validación");';
					echo '</script>';
					$this->load->view('view_form_contactos');
				}
			}
			else
			{
				//traer datos del modelo
				$data = array('datos' => $this->M_contactos->getById($id),);

				//validar si es vacia
				if(!empty($data['datos']))
				{
					//pasar a la vista los datos
					$this->load->view('view_form_contactos', $data);
				}
				else{
					echo "Su consulta no ha arrojado resultados";
				}
			}
			
		}
	}

	/**
	 * funcion para eliminar un contacto
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function eliminar($id){

		if($id == null or !is_numeric($id))
		{
			echo "Error data null";
			return;
		}
		else
		{
			if($this->input->post())
			{
				//obtener datos post
				$idDelete = $this->input->post('con_id');
				$this->M_contactos->delete($idDelete);
				redirect('contactos/listar');
			}
			else
			{
				//traer datos del modelo
				$data = array('datos' => $this->M_contactos->getById($id),);

				//validar si es vacia
				if(!empty($data['datos']))
				{
					//pasar a la vista los datos
					$this->load->view('view_eliminar_contactos', $data);
				}
				else
				{
					echo '<h1>'."Su consulta no ha arrojado resultados".'</h1>';
				}
			}
		}
	}


}

/*fin contactos.php*/