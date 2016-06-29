<?php
class Publicacion_model extends CI_Model
{
	public $titulo;
	public $subtitulo;
	public $descripcion;
	public $imagen;
	public $fechapub;

	public function get()
	{
		$this->db->order_by('fechapub', 'DESC');
		$query = $this->db->get('publicacion');
		return $query->result();
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('publicacion');
		return $query->row();
	}
}