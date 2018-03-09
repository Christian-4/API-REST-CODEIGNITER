<?php
class Diccionario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get($id = null)
	{
		if (!is_null($id))
		{
			$query = $this->db->select('*')->from('diccionario')->where('id', $id)->get();
			if ($query->num_rows() === 1)
			{
				return $query->row_array();
			}
		return false;
		}

		$query = $this->db->select('*')->from('diccionario')->get();
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		return false;
	}

	public function guardar($palabra)
	{
		$this->db->set($this->_setpalabra($palabra))->insert('diccionario');
		if ($this->db->affected_rows() === 1)
		{
			return $this->db->insert_id();
		}
		return false;
}

	public function actualizar($id, $palabra)
	{
		$this->db->set($this->_setpalabra($palabra))->where('id', $id)->update('diccionario');
                if ($this->db->affected_rows() === 1)
                {
                        return true;
                }
                return false;

	}

	public function borrar($id)
	{
		$this->db->where('id', $id)->delete('diccionario');
		if ($this->db->affected_rows() === 1)
		{
			return true;
		}
		return false;
	}

	public function _setpalabra($palabra)
	{
		return array(
			'id' => $palabra['id'],
			'nombre' => $palabra['nombre'],
			'descripcion' => $palabra['descripcion']
		);
	}
}
