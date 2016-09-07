<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audio_model extends CI_Model {
    
    public $titulo;
    public $ministerio;
    public $url_audio;
    public $fecha;
    public $usuario_id;
    
    public function get() {
        $this->db->order_by('fecha', 'DESC');
        $query = $this->db->get('audio');
        return $query->result();
    }

    public function find_ministerio($ministerio) {
        $this->db->where('ministerio', $ministerio);
        $this->db->order_by('titulo', 'ASC');
        $query = $this->db->get('audio');
        return $query->result();
    }

    public function get_ministerios() {
        $this->db->select('ministerio, count(*) as cantidad');
        $this->db->from('audio');
        $this->db->order_by('ministerio');
        $this->db->group_by('ministerio');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function find($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('audio');
        return $query->row();
    }
    
    public function insert() {
        $this->titulo = $this->input->post('titulo');
        $this->ministerio = $this->input->post('ministerio');
        $this->url_audio = $this->input->post('url_audio');
        $this->fecha = now('America/La_Paz');
        $this->usuario_id = $this->session->userdata('id');
        $this->db->insert('audio', $this);
    }
    
    public function update($id) {
        $this->titulo = $this->input->post('titulo');
        $this->ministerio = $this->input->post('ministerio');
        $this->url_audio = $this->input->post('url_audio');
        $this->fecha = now('America/La_Paz');
        $this->usuario_id = $this->session->userdata('id');
        $this->db->where('id', $id);
        $this->db->update('audio', $this);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('audio');
    }
}