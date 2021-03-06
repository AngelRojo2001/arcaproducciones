<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {
    
    public $titulo;
    public $autor;
    public $url_video;
    public $fecha;
    public $usuario_id;
    
    public function get() {
        $this->db->order_by('fecha', 'DESC');
        $query = $this->db->get('video');
        return $query->result();
    }
    
    public function find($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('video');
        return $query->row();
    }
    
    public function insert() {
        $this->titulo = $this->input->post('titulo');
        $this->autor = $this->input->post('autor');
        $this->url_video = $this->input->post('url_video');
        $this->fecha = now('America/La_Paz');
        $this->usuario_id = $this->session->userdata('id');
        $this->db->insert('video', $this);
    }
    
    public function update($id) {
        $this->titulo = $this->input->post('titulo');
        $this->autor = $this->input->post('autor');
        $this->url_video = $this->input->post('url_video');
        $this->fecha = now('America/La_Paz');
        $this->usuario_id = $this->session->userdata('id');
        $this->db->where('id', $id);
        $this->db->update('video', $this);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('video');
    }
}