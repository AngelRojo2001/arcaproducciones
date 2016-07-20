<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacion_model extends CI_Model
{
	/*public $id;
	public $titulo;
	public $subtitulo;
	public $descripcion;
	public $imagen;
	public $fechapub;
	public usuario_id;*/

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

	public function insert($imagen)
	{
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'subtitulo' => $this->input->post('subtitulo'),
			'descripcion' => $this->input->post('descripcion'),
			'imagen' => $imagen,
			'fechapub' => now('America/La_Paz'),
			'usuario_id' => $this->session->userdata('id')
		);
		$this->db->insert('publicacion', $data);
	}

	public function update($id, $imagen = NULL)
	{
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'subtitulo' => $this->input->post('subtitulo'),
			'descripcion' => $this->input->post('descripcion'),
			'fechapub' => now('America/La_Paz'),
			'usuario_id' => $this->session->userdata('id')
		);
		if ($imagen != NULL) {
			$data['imagen'] = $imagen;
		}
		$this->db->where('id', $id);
		$this->db->update('publicacion', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('publicacion');
	}

	public function delete_image($id)
	{
		$data = array(
			'imagen' => NULL
		);
		$this->db->where('id', $id);
		$this->db->update('publicacion', $data);
	}
}