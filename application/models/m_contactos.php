<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
clase Modelos de contactos
 */
class M_contactos extends CI_Model {

	private $DBName;

	/*
	funcion constructor
	 */
	public function __construct(){
		parent::__construct();
		
		//cargar base de datos
		$this->load->database();
		$this->DBName = 'contactos';
	}

	/*
	function que obtiene todos los datos de la BD
	 */
	public function get_datos()
	{
		//obtener datos
		$query = $this->db->get($this->DBName);

		return $query->result();
	}

	/*
	insertar datos
	 */
	public function add()
	{
		//insertar a la BD
		$dataInsert = $this->input->post();
		//elimina el id del boton
		unset($dataInsert['btn_guardar']);

		$this->db->insert($this->DBName, $dataInsert);

		return $this->db->insert_id();
	}

	/**
	 * buscar datos por id
	 * @return [type] [description]
	 */
	public function getById($id)
	{
		//buscar por id 
		$query = $this->db->where('con_id',$id);
		$query = $this->db->get($this->DBName);
		return $query->result();
	}

	/**
	 * funcion para editar un contacto
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function edit($id)
	{
		$dataUp = $this->input->post();
		unset($dataUp['btn_guardar']);
		$this->db->where('con_id', $id);
		$this->db->update($this->DBName, $dataUp);
	}

	/**
	 * funcion eliminar un contacto
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id){
		$this->db->where('con_id', $id);
		$this->db->delete($this->DBName);
	}
}

/*fin del M_contactos.php*/