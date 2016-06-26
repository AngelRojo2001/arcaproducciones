<?php
class Publicacion_model extends CI_Model {

	public $titulo;
	public $subtitulo;
	public $descripcion;
	public $imagen;
	public $fechapub;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get() {
		$this->db->order_by('fechapub', 'DESC');
		$query = $this->db->get('publicacion');
		return $query->result();
	}
}